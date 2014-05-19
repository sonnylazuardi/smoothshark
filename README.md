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

Run XAMPP / LAMPP stack on your computer

Copy the source to `htdocs/smoothshark`

Then, open in browser and enjoy

http://localhost/smoothshark


## License

(The MIT License)

Copyright (c) 2013-2014 Sonny Lazuardi <sonnylazuardi@gmail.com>

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.