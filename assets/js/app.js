jQuery(document).ready(function($){

  var buttons = document.querySelectorAll('.dropdown-button'),
      text = document.querySelectorAll( '.hidden-text');
  buttons.forEach(function( el ){
    el.addEventListener( 'click', function() {
      text.forEach(function( tx ){
       if (tx.classList.contains( 'open' )) {
         tx.classList.remove('open');
       }
      });
      var textToOpen = this.nextElementSibling;
      setTimeout(function(){
        textToOpen.classList.add( 'open' );
      },350);
    });
  });

  $('.grid').masonry({
    // set itemSelector so .grid-sizer is not used in layout
    itemSelector: '.grid-item',
    // use element for option
    columnWidth: '.grid-sizer',
    percentPosition: true
  });
  var dropdown_button = document.querySelector('.drp-menu'),
      dropdown_text = document.querySelector('.dropdown-content');
  dropdown_button.addEventListener( 'click', function() {
    dropdown_text.classList.toggle('open-drp-menu');
  });
});
