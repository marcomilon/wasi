<?php 

use micro\form\Builder;

$builder = new Builder();

?>
<form  id="needs-validation" action="" method="post" novalidate>
    <input type="hidden" name="set" value="<?= $set ?>">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" <?= isset($model->title) ? 'value="'.$model->title.'"' : '' ?>" required>
    </div>
    
    <h5 class="mt-4 mb-2">Content</h5>
    
    <?php foreach($forms as $form): ?>
        <?= $builder->render($form); ?>
    <?php endforeach; ?>
    
    <div class="text-right">
        <button type="submit" class="btn btn-primary" role='button'><i class="fas fa-save"></i> Save</button>
    </div>
</form>