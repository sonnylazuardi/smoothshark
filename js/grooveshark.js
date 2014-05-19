var audio = new Audio();

(function($) {

	$.vegas('slideshow', {
		delay:8000,
		backgrounds:[
			{ src:'img/bg.jpg', fade:1000 }
			// { src:'img/bg2.jpg', fade:1000 }
		]
	})('overlay');

	$('.song-control').hide();
	$('.loading').hide();

	function playSong(songID) {
		$.ajax({
		  url: "api/songGetter.php",
		  type: "POST",
		  data: {
		  	song: songID
		  },
		  success: function(response) {
		  	$('.song-control').fadeIn();
		  	$('.loading').hide();
		    var responseData = $.parseJSON(response);
		    audio = new Audio(responseData.stream.url);
			audio.play();
			$('#title').html(responseData.info.SongName);
			$('#artist').html(responseData.info.ArtistName);
			$('#album').html(responseData.info.AlbumName);
			$("#coverArt").attr("src","http://images.gs-cdn.net/static/albums/" + responseData.info.CoverArtFilename);
			// console.log(responseData);
		    // window.player.playStreamKey(responseData.StreamKey, responseData.StreamServerHostname, responseData.StreamServerID);
		  }
		});
	}
	
	function findAndPlaySong(searchString) {
		audio.pause();
		$('.song-control').hide();
		$('.loading').fadeIn();
		$.ajax({
			url: 'api/idGetter.php?query=' + searchString,
			dataType: 'jsonp',
			success: function(data) {
		  		playSong(data.SongID);
		  	}
		});
	}
	
	function pauseMusic() {
		// window.player.pauseStream();
		audio.pause();
	}
	
	function resumeMusic() {
		// window.player.resumeStream();
		audio.play();
	}
	
	var doc = $(document);
	
	doc.on("click", "a[data-songid]", function(e) {
		e.preventDefault();	
		playSong($(this).data("songid"));
	});
	
	doc.on("click", ".pause", function() {
		pauseMusic();
	});
	
	doc.on("click", ".resume", function() {
		resumeMusic();
	});
	
	doc.on("click", ".search-song", function(e) {
		e.preventDefault();
		findAndPlaySong($("#song-search-input").val());
	});

})(jQuery);