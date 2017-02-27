<?php require('layout/header.php'); ?>

<div class="page-header">
  <h1>Wasi</h1>
  <p class="lead">Create new schema</p>
</div>

<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">New schema</li>
</ol>

<form method="post" action="/wasi/api/v1/schema/">
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Title">
      </div>
      <div class="form-group">
        <label for="schema">Schema</label>
        <textarea class="form-control" name="schema" rows="12" id="schema"></textarea>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-right">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php require('layout/footer.php'); ?>
