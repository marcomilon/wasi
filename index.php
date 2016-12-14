<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple CMS - Wasi</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/sidebar.css" rel="stylesheet">

  <link href="css/wasi.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script src="js/jsoneditor.min.js"></script>
  <script>
  // Set the default CSS theme and icon library globally
  JSONEditor.defaults.theme = 'bootstrap3';
  </script>
</head>

<body>

  <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a href="#">
            Wasi
          </a>
        </li>
        <li>
          <a href="#">Dashboard</a>
        </li>
        <li>
          <a href="#">Shortcuts</a>
        </li>
        <li>
          <a href="#">Overview</a>
        </li>
        <li>
          <a href="#">Events</a>
        </li>
        <li>
          <a href="#">About</a>
        </li>
        <li>
          <a href="#">Services</a>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
      </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <h4>Editor</h4>
            <div id='editor_holder'></div>
            <button id='submit'>Submit (console.log)</button>
          </div>
          <div class="col-lg-4">
            <h4>Output</h4>
            <textarea id="output" class="form-control" rows="3" style="height: 600px"></textarea>
          </div>
          <div class="col-lg-4">
            <h4>Schema</h4>
            <textarea id="schema" class="form-control" rows="3" style="height: 600px">
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
                  }
                }
              }
            </textarea>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <script>
  var schema = JSON.parse(document.getElementById("schema").value);
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

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
  </script>

</body>

</html>
