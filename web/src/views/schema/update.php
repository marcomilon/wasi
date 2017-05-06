<ol class="breadcrumb">
  <li><a href="index.php?r=schema"><i class="fa fa-home" aria-hidden="true"></i> Schemas</a></li>
  <li class="active">New schema</li>
</ol>

<form method="post" action="">
  <div class="row">
    <div class="col-md-10">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="<?= $item->name ?>">
      </div>
      <div class="form-group">
        <label for="schema">Schema (Json)</label>
        <textarea name="schema" style="display: none;"></textarea>
        <pre id="editor"><?= $item->body ?></pre>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 text-right">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
