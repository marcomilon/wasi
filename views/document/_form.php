<?php 

use micro\form\Builder;

$builder = new Builder();

?>
<form id="needs-validation" action="" method="post" novalidate>
    <input type="hidden" name="metadata[set]" value="<?= $set ?>">
    <div class="form-group">
        <label for="title">Document name</label>
        <input type="text" class="form-control input-sm" id="title" name="metadata[title]" <?= isset($model->title) ? 'value="'.$model->title.'"' : '' ?> required>
    </div>
    
    <div class="inputbox p-3">
        <?php foreach($forms as $form): ?>
            <p class="document-title text-dark"><?= $form['title'] ?></p>
            <?php $values = isset($body) ? $body : [] ?>
            <?= $builder->render($form['body'], $values); ?>
        <?php endforeach; ?>
        
        <div class="text-right">
            <button type="submit" class="btn btn-sm btn-primary" role='button'><i class="fas fa-save"></i> Save</button>
        </div>
    </div>
</form>