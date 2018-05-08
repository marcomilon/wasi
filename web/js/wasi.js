(function() {
  'use strict';
  
  window.addEventListener('load', function() {
    var form = document.getElementById('needs-validation');
    if(form !== null) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    }
  }, false);
})();

$(document).ready(function() {
  $('.toggle-block').click(function(e) {
    e.preventDefault();
    $(this).parent().nextAll('.block:first').slideToggle();
  });
  
  $('.confirmation-modal').click(function(e) {
    e.preventDefault();
    var href = $(this).attr('href');
    $('#confirmationModal').modal('show');
    
    $('#confirmation-modal-yes').click(function(e) {
      window.location = href;
    })
    
  })
  
  
});