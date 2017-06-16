/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var NotaID = button.data('nota');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Nota #' + NotaID);
  modal.find('#confirm').attr('href', 'delete.php?NotaID=' + NotaID);
})