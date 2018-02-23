<div class="text-right text-muted">
    <a href="index.php?r=form/default/index" class="text-muted"><i class="fas fa-arrow-left"></i></a>
</div>

<form  id="needs-validation" action="" method="post" novalidate>
    <div class="inputbox p-3">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" <?= isset($model->title) ? 'value="'.$model->title.'"' : '' ?> required>
            
        </div>
        <div class="form-group">
            <label for="form">Form</label>
            <textarea class="form-control" id="form" rows="8" name="body" required><?= isset($model->body) ? $model->body : '' ?></textarea>
        </div>
        
        <div class="text-right">
            <button type="submit" class="btn btn-sm btn-primary" role='button'><i class="fas fa-save"></i> Save</button>
        </div>
    </div>
</form>