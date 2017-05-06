$( document ).ready(function() {

  $(document).on('click', '.delete-item', function (e) {
    e.preventDefault();

    var hash = $(this).data('hash');

    $('#modal-delete').modal('show').one('click', '#modal-delete-submit', function(e) {
      e.preventDefault();
      $.get('index.php?r=schema/delete', { hash: hash } ).done(function( data ) {
        location.reload();
      });

      $('#modal-delete').modal('hide');
    });
  });

});
