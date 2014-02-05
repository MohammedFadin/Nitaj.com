jQuery(function() {
    
    $.getJSON('http://api.flickr.com/services/rest/?format=json&method='+
        'flickr.photos.search&api_key=' + apiKey + '&user_id=' + userId + 
        '&tags=' + tag + '&per_page=' + perPage + '&jsoncallback=?', 
    function(data){
        var classShown = 'class="lightbox"';
        var classHidden = 'class="lightbox hidden"';
        
        $.each(data.photos.photo, function(i, rPhoto){
          var basePhotoURL = 'http://farm' + rPhoto.farm + '.static.flickr.com/'
            + rPhoto.server + '/' + rPhoto.id + '_' + rPhoto.secret;            
            
            var thumbPhotoURL = basePhotoURL + '_s.jpg';
            var mediumPhotoURL = basePhotoURL + '.jpg';
            
            var photoStringStart = '<li><a ';
            var photoStringEnd = 'title="' + rPhoto.title + '" href="'+ 
                mediumPhotoURL +'"><img width="100%" src="' + thumbPhotoURL + '" alt="' + 
                rPhoto.title + '"/></a></li>';                
            var photoString = (i < showOnPage) ? 
                photoStringStart + classShown + photoStringEnd : 
                photoStringStart + classHidden + photoStringEnd;
                                        
            $(photoString).appendTo("#flickr");
        });
        
    });
});