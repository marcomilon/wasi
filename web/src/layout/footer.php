</div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<script src="<?= \Wasi\Framework\Application::params('public') ?>/js/jquery.js"></script>
<script src="<?= \Wasi\Framework\Application::params('public') ?>/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

<script src="<?= \Wasi\Framework\Application::params('public') ?>/js/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="<?= \Wasi\Framework\Application::params('public') ?>/js/beautify.min.js" type="text/javascript" charset="utf-8"></script>

<script>
var editorId = document.getElementById("editor");
if(editorId !== null) {
  var textarea = $('textarea[name="schema"]');
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
    indent_size : 2
  };
  session.setValue(js_beautify(session.getValue(), jsbOpts));
}
</script>

<script src="<?= \Wasi\Framework\Application::params('public') ?>/js/wasi.js"></script>
</body>

</html>
