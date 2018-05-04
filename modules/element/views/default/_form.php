<?php if(\app\model\Content::$hasError): ?>
    <div class="alert alert-danger" role="alert">
        The supplied JSON validates against the schema.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<div class="text-right text-muted">
    <a href="index.php?r=element/default/index" class="text-muted"><i class="fas fa-arrow-left"></i></a>
</div>
<form  id="needs-validation" action="" method="post" novalidate>
    <div class="inputbox p-3">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= $model->title ?>" required>
            
        </div>
        <div class="form-group">
            <label for="form">Element</label>
            <textarea class="form-control" id="form" rows="8" name="body" required><?= $model->body ?></textarea>
        </div>
        
        <div class="text-right">
            <button type="submit" class="btn btn-sm btn-primary" role='button'><i class="fas fa-save"></i> Save</button>
        </div>
    </div>
</form>