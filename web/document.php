<?php require('layout/header.php'); ?>

<div class="page-header">
  <h1>Wasi</h1>
  <p class="lead">Create new content</p>
</div>

<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Content</li>
</ol>

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#editor">Editor</a></li>
  <li><a data-toggle="tab" href="#output">Output</a></li>
  <li><a data-toggle="tab" href="#schema">Schema</a></li>
</ul>

<div class="tab-content">
  <div id="editor" class="tab-pane fade in active">
    <div class="row">
      <div class="col-md-12">
        <div id='editor_holder'></div>
      </div>
    </div>
  </div>
  <div id="output" class="tab-pane fade">
    <div class="row">
      <div class="col-md-12">
        <h3>Output</h3>
        <textarea id="output" class="form-control" rows="3" style="height: 400px"></textarea>
      </div>
    </div>
  </div>
  <div id="schema" class="tab-pane fade">
    <h3>Schema</h3>
    <div class="row">
      <div class="col-md-12">
        <textarea id="json_schema" class="form-control" rows="3" style="height: 400px">
{
  "type": "object",
  "title": "Email Template",
  "properties": {
    "p1": {
      "type": "string",
      "format": "textarea",
      "options": {
        "rows": "10"
      }
    },
    "p2": {
      "type": "string",
      "format": "textarea",
      "options": {
        "rows": "10"
      }
    },
    "p3": {
      "type": "string",
      "format": "textarea",
      "options": {
        "rows": "10"
      }
    },
    "p4": {
      "type": "string",
      "format": "textarea",
      "options": {
        "rows": "10"
      }
    },
    "p5": {
      "type": "string",
      "format": "textarea",
      "options": {
        "rows": "10"
      }
    },
    "p6": {
      "type": "string",
      "format": "textarea",
      "options": {
        "rows": "10"
      }
    },
    "p7": {
      "type": "string",
      "format": "textarea",
      "options": {
        "rows": "10"
      }
    },
    "p8": {
      "type": "string",
      "format": "textarea",
      "options": {
        "rows": "10"
      }
    },
    "p9": {
      "type": "string",
      "format": "textarea",
      "options": {
        "rows": "10"
      }
    },
    "p10": {
      "type": "string",
      "format": "textarea",
      "options": {
        "rows": "10"
      }
    }
  }
}</textarea>
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
