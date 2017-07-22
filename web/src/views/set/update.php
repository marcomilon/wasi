<ol class="breadcrumb">
  <li><a href="index.php?r=set"><i class="fa fa-home" aria-hidden="true"></i> Sets</a></li>
  <li class="active">New set</li>
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
    </div>
  </div>

  <div class="row">
    <div class="col-md-10">
      <h4>Sets</h4>
      <p>Please select the Schema to update the set.</p>
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php if(!empty($items)): ?>
            <?php $index = 0 ?>
            <?php foreach($items as $item): ?>
              <?php $schema = json_decode($item) ?>
              <tr>
                <td><?= $schema->name ?></td>
                <td class="text-right">
                  <input type="checkbox" name="body[<?= $index ?>]" value="<?= $schema->hash ?>" <?= in_array($schema->hash, $hashes) ? 'checked="checked"' : '' ?>>
                </td>
              </tr>
              <?php $index++ ?>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="2">Schema db is empty</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="row">
    <div class="col-md-10 text-right">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
