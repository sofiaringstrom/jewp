$(document).ready(function() {

	var container = $('#video-feed');
  var JSONVideosUrl = "http://vimeo.com/api/v2/chlamo/videos.json";
  var html = '<div class="row">';
  
  $.when($.ajax(JSONVideosUrl)).then(function(videos){

  	for (i in videos) {

  		var videoUrl = videos[i].url;
  		var JSONEmbedUrl = "https://vimeo.com/api/oembed.json?url=";
      JSONEmbedUrl += videoUrl;
  		JSONEmbedUrl += '/&portrait=false&height=300&byline=false';

      if (i % 3 == 0 && i != 0) {
        html += '</div><div class="row collapse">';
      }
      html += '<div class="column small-12 medium-6 large-4"><img src="' + videos[i].thumbnail_large + '" /></div>';
      if (i == videos.length) {
        html += '</div>';
      }

      // när man klickar på bilden, öppna videon i en overlay eller nått
      /*$.when($.ajax(JSONEmbedUrl)).then(function(embedObj) {
	  	
  			var html = embedObj.html;
  			container.append(html)
	  	
	  	})*/
  	
  	}

    container.append(html)

  })

});
