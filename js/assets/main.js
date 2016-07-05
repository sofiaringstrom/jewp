$(document).ready(function() {

	var container = $('#video-feed');

	/*$.ajax({
	  url: "http://vimeo.com/api/v2/chlamo/videos.json",	
	})
  .done(function( videos ) {
    var videoGrid = '<div class="row"><div class="small-12 columns">';

    for (i in videos) {
    	var videoObj = videos[i];
    	var videoUrl = videoObj.url;

    	$.ajax({
    		url: "https://vimeo.com/api/oembed.json?url=" + videoUrl
    	}).done(function( embedObj ) {
    		for (i in embedObj) {
    			var html = embedObj[i].html;
    		}
    	});
    }

    videoGrid += '</div></div>';

    container.html(videoGrid);
  });*/
  var JSONVideosUrl = "http://vimeo.com/api/v2/chlamo/videos.json";
  $.when($.ajax(JSONVideosUrl)).then(function(videos){

  	for (i in videos) {
  		
  		var videoUrl = videos[i].url;
  		var JSONEmbedUrl = "https://vimeo.com/api/oembed.json?url=";
  		JSONEmbedUrl += videoUrl;
  		JSONEmbedUrl += '/&portrait=false&height=300&byline=false'
	  	$.when($.ajax(JSONEmbedUrl)).then(function(embedObj) {
	  	
  			var html = embedObj.html;
  			container.append(html)
	  	
	  	})
  	
  	}

  })

});
