$('.nav-link').on('click', () => {
  $('.nav-link').removeClass('active');
  $(this).toggleClass('active');
});

$('.select2').select2();

$('#btnLimpar').on('click', function() {
  $('.select2')
    .val('DO')
    .trigger('changed');
});