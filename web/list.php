<?php

require_once('config/web.php');
$schemas = json_decode(file_get_contents($params['api'] . '/documents/' . $_GET['hash']));

require('layout/header.php');

?>

<div class="row">
  <div class="col-md-12">
    <div class="actions">
      <a href="document.php?hash=<?= $_GET['hash'] ?>"><i class="fa fa-plus" aria-hidden="true"></i> New document</a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h4>Available content: Name</h4>
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
