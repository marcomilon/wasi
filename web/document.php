<?php

require_once('config/web.php');

$data = json_decode(file_get_contents($config['api'] . '/schemas/' . $_GET['hash']), true);

require_once('layout/header.php');

?>

<ol class="breadcrumb">
  <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
  <li class="active">Content</li>
</ol>

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#editor">Editor</a></li>
  <li><a data-toggle="tab" href="#output">Output</a></li>
</ul>

<div class="tab-content">
  <div id="editor" class="tab-pane fade in active">
    <div class="row">
      <div class="col-md-8">
        <div id='editor_holder'></div>
      </div>
      <div class="col-md-4">
        <h3><span>Metadata</span></h3>
        <div class="select-schema">
          Created at: 10/02/2017 18:25
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 text-right">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
  <div id="output" class="tab-pane fade">
    <div class="row">
      <div class="col-md-12">
        <h3>Output</h3>
        <div class="form-group">
          <textarea id="output" class="form-control" rows="3" style="height: 400px"></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-right">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
  <div id="schema" class="tab-pane fade">
    <h3>Schema</h3>
    <div class="row">
      <div class="col-md-12">
        <textarea id="json_schema" class="form-control" rows="3" style="height: 400px">
          <?= $data['schema'] ?>
        </textarea>
      </div>
    </div>
  </div>

</div>

<script>
var schema = JSON.parse(document.getElementById("json_schema").value);
// Initialize the editor with a JSON schema
var editor = new JSONEditor(document.getElementById('editor_holder'), {
  schema: schema,
  disable_collapse: true,
  disable_edit_json: true,
  disable_properties: true
});

// Hook up the submit button to log to the console
document.getElementById('submit').addEventListener('click',function() {
  // Get the value from the editor
  document.getElementById("output").value = JSON.stringify(editor.getValue());
  document.getElementById("myForm").submit();
});
</script>

<?php require('layout/footer.php'); ?>
