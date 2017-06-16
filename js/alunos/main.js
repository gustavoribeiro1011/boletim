/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var AlunoID = button.data('aluno');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Aluno #' + AlunoID);
  modal.find('#confirm').attr('href', 'delete.php?AlunoID=' + AlunoID);
})