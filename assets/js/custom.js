jQuery(document).ready(function($) {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '224643088',
        limit: 9,
        resolution: 'standard_resolution',
        accessToken: '224643088.1677ed0.cda12745ad0e45539bdc8b00aa91a71f',
        sortBy: 'most-recent',
        template: '<li class="instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}"/></a></li>',
    });
    userFeed.run();

    // This will create a single gallery from all elements that have class "gallery"
    $('.gallery').magnificPopup({
      type: 'image',
      delegate: 'a',
      gallery:{
        enabled:true
      }
    });
});
