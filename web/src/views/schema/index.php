<div class="row">
  <div class="col-md-12">
    <div class="actions">
      <a href="index.php?r=schema/create"><i class="fa fa-plus" aria-hidden="true"></i> New schema</a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h4>Schemas</h4>
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($schemas as $schema): ?>
          <?php $item = json_decode($schema) ?>
          <tr>
            <td><?= $item->name ?></td>
            <td class="text-right">
              <a href="index.php?r=schema/update&hash=<?= $item->hash ?>" class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a>
              <a href="index.php?r=schema/delete&hash=<?= $item->hash ?>" class="btn-action"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
