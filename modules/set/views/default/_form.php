<div class="text-right text-muted">
    <a href="index.php?r=set/default/index" class="text-muted"><i class="fas fa-arrow-left"></i></a>
</div>

<form  id="needs-validation" action="" method="post" novalidate>
    <div class="inputbox p-3">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" <?= isset($set->title) ? 'value="'.$set->title.'"' : '' ?> required>
        </div>
        <div class="form-group">
            <label for="title">Forms</label>
            <table class="table table-create-set">
                <tbody>
                    <?php foreach($models as $model): ?>
                        <tr>
                            <td class="table-create-set__td align-middle">
                                <input id="form_<?= $model->id ?>" type="checkbox" name="form[<?= $model->id ?>]" <?= in_array($model->id, $forms) ? 'checked="checked"' : '' ?>>
                                <label for="form_<?= $model->id ?>" class="table-create-set__label"><?= $model->title ?></label>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-sm btn-primary" role='button'><i class="fas fa-save"></i> Save</button>
        </div>
    </div>
</form>