</div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<div id="modal-delete" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this Schema?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="modal-delete-submit">Delete</button>
      </div>
    </div>
  </div>
</div>

<script src="<?= \Wasi\Framework\Application::params('public') ?>/js/jquery.js"></script>
<script src="<?= \Wasi\Framework\Application::params('public') ?>/js/bootstrap.min.js"></script>
<script src="<?= \Wasi\Framework\Application::params('public') ?>/js/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="<?= \Wasi\Framework\Application::params('public') ?>/js/beautify.min.js" type="text/javascript" charset="utf-8"></script>

<script>
var editorId = document.getElementById("editor");
if(editorId !== null) {
  var textarea = $('textarea[name="body"]');
  var editor = ace.edit("editor");
  editor.setTheme("ace/theme/chrome");
  editor.session.setMode("ace/mode/json");
  editor.getSession().on("change", function () {
    textarea.val(editor.getSession().getValue());
  });
  formatCode();
}

function formatCode() {
  var session = editor.getSession();
  var jsbOpts = {
    indent_size: 2
  };
  session.setValue(js_beautify(session.getValue(), jsbOpts));
}
</script>

<script src="<?= \Wasi\Framework\Application::params('public') ?>/js/wasi.js"></script>
</body>

</html>
