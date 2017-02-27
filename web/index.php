<?php require('layout/header.php'); ?>

<div class="page-header">
  <h1>Wasi</h1>
  <p class="lead">Simple headless CMS</p>
  <a href="document.php" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> New content</a>
  <a href="schema.php" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> New schema</a>
</div>

<div class="row">
  <div class="col-md-12">
    <h4>Available content</h4>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th class="col-md-7">Content key</th>
          <th>Created at</th>
          <th>Last modified</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td class="text-right">
            <a class="btn btn-default btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
            <a class="btn btn-default btn-xs"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Delete</a>
          </td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td class="text-right">
            <a class="btn btn-default btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
            <a class="btn btn-default btn-xs"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php require('layout/footer.php'); ?>
