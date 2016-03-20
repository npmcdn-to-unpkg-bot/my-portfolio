var $container = $('#container').isotope({
  // options
});
// filter items on button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $container.isotope({ filter: filterValue });
});