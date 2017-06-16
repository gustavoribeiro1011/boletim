/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var ProfessorID = button.data('professor');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Professor #' + ProfessorID);
  modal.find('#confirm').attr('href', 'delete.php?ProfessorID=' + ProfessorID);
})