<ol class="breadcrumb">
  <li><a href="index.php?r=schema"><i class="fa fa-home" aria-hidden="true"></i> Schemas</a></li>
  <li class="active">New schema</li>
</ol>

<?php if(!empty($model->errors)): ?>
<?php $error = array_shift($model->errors) ?>
<div class="row">
  <div class="col-md-10">
    <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Danger!</strong> <?= $error ?>
    </div>
  </div>
</div>
<?php endif; ?>

<form method="post" action="">
  <div class="row">
    <div class="col-md-10">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="<?= $item->name ?>">
      </div>
      <div class="form-group">
        <label for="body">Schema (Json)</label>
        <textarea name="body" style="display: none;"></textarea>
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
