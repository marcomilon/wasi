<form  id="needs-validation" action="" method="post" novalidate>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" <?= isset($set->title) ? 'value="'.$set->title.'"' : '' ?> required>
    </div>
    <div class="form-group">
        <label for="title">Forms</label>
        <table class="table">
            <tbody>
                <?php foreach($models as $model): ?>
                    <tr>
                        <td class="table__checkbox">
                            <input id="form_<?= $model->id ?>" type="checkbox" name="form[<?= $model->id ?>]" <?= in_array($model->id, $forms) ? 'checked="checked"' : '' ?>>
                        </td>
                        <td class="align-middle">
                            <label for="form_<?= $model->id ?>"><?= $model->title ?></label>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-primary" role='button'><i class="fas fa-save"></i> Save</button>
    </div>
</form>