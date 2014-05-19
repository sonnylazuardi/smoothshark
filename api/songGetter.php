<?php

    session_start();

    if (isset($_POST['song']) && is_numeric($_POST['song'])) {
        $songID = $_POST['song'];
    } else {
        die("noSongID");
    }

    require("gsAPI.php");
    $gsapi = new gsAPI('API_KEY', 'API_SECRET');
    gsAPI::$headers = array("X-Client-IP: " . $_SERVER['REMOTE_ADDR']);

    if (isset($_SESSION['gsSession']) && !empty($_SESSION['gsSession'])) {
        $gsapi->setSession($_SESSION['gsSession']);
    } else {
        $_SESSION['gsSession'] = $gsapi->startSession();
    }

    if (!$_SESSION['gsSession']) {
        die("noSession");
    }
    if (isset($_SESSION['gsCountry']) && !empty($_SESSION['gsCountry'])) {
        $gsapi->setCountry($_SESSION['gsCountry']);
    } else {
        $_SESSION['gsCountry'] = $gsapi->getCountry();
    }
    if (!$_SESSION['gsCountry']) {
        die("noCountry");
    }

    // echo $gsapi->getSession();
    $streamInfo = $gsapi->getStreamKeyStreamServer($songID, false);
    $songInfo = $gsapi->getSongInfo($songID);
    $hasil = array('stream'=>$streamInfo, 'info'=>$songInfo);
    echo json_encode($hasil);
    
?>