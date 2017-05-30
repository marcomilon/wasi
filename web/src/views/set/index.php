<div class="row">
  <div class="col-md-12">
    <div class="actions">
      <a href="index.php?r=set/create"><i class="fa fa-plus" aria-hidden="true"></i> New set</a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <h4>Sets</h4>
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php if(!empty($items)): ?>
          <?php foreach($items as $item): ?>
            <?php $schema = json_decode($item) ?>
            <tr>
              <td><?= $schema->name ?></td>
              <td class="text-right">
                <a href="index.php?r=schema/update&hash=<?= $schema->hash ?>" class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a class="btn-action delete-item" data-hash="<?= $schema->hash ?>" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="2">Set db is empty</td>
            </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>
