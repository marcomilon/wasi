<ol class="breadcrumb">
  <li><a href="index.php?r=document"><i class="fa fa-home" aria-hidden="true"></i> Documents</a></li>
  <li class="active">New document</li>
</ol>

<form method="post" action="">
  <div class="row">
    <div class="col-md-10">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label for="body">Schema (Json)</label>
        <textarea name="body" style="display: none;"></textarea>
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
