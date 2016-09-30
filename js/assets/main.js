$(document).ready(function() {

  var topVideoUrl = 'https://vimeo.com/api/oembed.json?url=https://vimeo.com/147933985/&portrait=false&height=500&byline=false';

  $.when($.ajax(topVideoUrl)).then(function(embedObj) {
    var container = $('.video-promoted .flex-video');

    var html = embedObj.html;
    container.append(html)
  
  })

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

      html += '<div class="column small-12 medium-6 large-4 vimeo-thumb" data-id="' + videos[i].id + '"><img src="' + videos[i].thumbnail_large + '" />';
      html += '<div class="thumb-overlay">' + videos[i].title + '</div>';
      html += '</div>';

      if (i == videos.length) {
        html += '</div>';
      }

      // när man klickar på bilden, öppna videon i en overlay eller nått
      /*$.when($.ajax(JSONEmbedUrl)).then(function(embedObj) {
	  	
  			var html = embedObj.html;
  			container.append(html)
	  	
	  	})*/
  	
  	}

    $.when(container.append(html)).then(function() {
      
      $('.vimeo-thumb').hover(function() {
        $(this).find('.thumb-overlay').toggleClass('show');
      });

      $('.vimeo-thumb').on('click', function(e) {
        
        e.stopPropagation();

        $('#vimeo-overlay').removeClass('hidden');

        var videoId = $(this).attr('data-id');
        var videoUrl = 'https://vimeo.com/' + videoId;

        var JSONEmbedUrl = "https://vimeo.com/api/oembed.json?url=";
        JSONEmbedUrl += videoUrl;
        JSONEmbedUrl += '/&portrait=false&height=500&byline=false';

        $.when($.ajax(JSONEmbedUrl)).then(function(embedObj) {
      
          var html = embedObj.html;
          $('#vimeo-overlay').html(html);

        });

      });

      $(document).click(function () {
        $('#vimeo-overlay').addClass('hidden').empty();
      });

    });

  })

});
