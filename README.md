smoothshark
===========

simple way of listening to music

![smoothshark](http://i.imgur.com/fXuEy5o.jpg)

## Installing

Get your api key from [here](http://developers.grooveshark.com/api), then change the API_KEY and API_SECRET in the file :

**api\songGetter.php**

	11      require("gsAPI.php");
	12:     $gsapi = new gsAPI('API_KEY', 'API_SECRET');
	13      gsAPI::$headers = array("X-Client-IP: " . $_SERVER['REMOTE_ADDR']);

**api\songInfo.php**

	11      require("gsAPI.php");
	12:     $gsapi = new gsAPI('API_KEY', 'API_SECRET');
	13      gsAPI::$headers = array("X-Client-IP: " . $_SERVER['REMOTE_ADDR']);

change directory to the source and do following steps

	npm install -g pushserve

run the pushserve

	pushserve --port 3000

open in browser

	http://localhost:3000/