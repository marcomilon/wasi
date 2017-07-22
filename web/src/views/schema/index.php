
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
        <?php if(!empty($items)): ?>
          <?php foreach($items as $item): ?>
            <?php $schema = json_decode($item) ?>
            <tr>
              <td><?= $schema->name ?></td>
              <td class="text-right">
                <a href="index.php?r=schema/update&hash=<?= $schema->hash ?>" class="btn-action"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a class="btn-action delete-item" data-action="schema/delete" data-hash="<?= $schema->hash ?>" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
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
