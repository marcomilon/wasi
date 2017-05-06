<ol class="breadcrumb">
  <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
  <li class="active"><a href="index.php?r=schema">Schemas</a></li>
  <li class="active">New schema</li>
</ol>

<form method="post" action="">
  <div class="row">
    <div class="col-md-10">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label for="schema">Schema (Json)</label>
        <textarea name="schema" style="display: none;"></textarea>
        <pre id="editor"></pre>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 text-right">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
