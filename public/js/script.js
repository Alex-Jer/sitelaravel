$('.nav-link').on('click', () => {
  $('.nav-link').removeClass('active');
  $(this).toggleClass('active');
});

$('.select2').select2();

$('#limpar').on('click', () => {
  $('.select2')
    .val('DO')
    .trigger('change');
  document.getElementById('descricao').value = '';
  document.getElementById('designacao').value = '';
});
