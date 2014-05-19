<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	<title>SmoothShark</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel='stylesheet' href='css/style.css'>
	<link rel="stylesheet" href="css/vegas.min.css">
</head>

<body>

	<div id="page-wrap">
		<h1><span class="thin">smooth</span>shark</h1>
		<p>The bridge API for smoothie application song streaming</p>
		<br>
		<form>
			<input type="text" id="song-search-input" name="song-search-input" value="Firework Katy Perry" class="form-control">
			<button type="submit" class="search-song btn btn-success"><span class="glyphicon glyphicon-search"></span> Search</button>
		</form>
		<div class="loading">
			Loading...
		</div>
		<div class="song-control">
			<img src="" alt="" id="coverArt">
			<div id="title"></div>
			<div id="artist"></div>
			<div id="album"></div>
			<a href="#" class="pause btn btn-primary"><span class="glyphicon glyphicon-pause"></span> Pause</a>
			<a href="#" class="resume btn btn-default"><span class="glyphicon glyphicon-play"></span> Resume</a>
		</div>
		
		<footer>
			Powered by <a href="http://grooveshark.com">Grooveshark</a>, and <a href="http://tinysong.com/">TinySong</a>
		</footer>
		
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/vegas.min.js"></script>
	<script src="js/grooveshark.js"></script>
	
</body>

</html>
