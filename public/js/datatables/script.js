$(() => {
  $('#destaques').DataTable({
    responsive: true,
    autoWidth: false,
    language: {
      url: '/plugins/datatables/Portuguese.json',
    },
  });
});

$(() => {
  $('#empregos').DataTable({
    order: [[6, 'desc']],
    responsive: true,
    autoWidth: false,
    language: {
      url: '/plugins/datatables/Portuguese.json',
    },
  });
});
