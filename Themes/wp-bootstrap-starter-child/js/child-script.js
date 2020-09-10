jQuery( function ( $ ) {
  console.log("in the new script!");
  $( ' .widget_nav_menu ul' ).removeClass( 'flex-column' );
  $( '#footer-widget section').wrap( '<div class="col-12 col-md-4 text-center"></div>');
});
