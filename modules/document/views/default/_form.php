<?php 

use micro\form\Builder;

$templates = [
    'text' => dirname(__FILE__) . '/../inputs/input-text.php',
    'textarea' => dirname(__FILE__) . '/../inputs/textarea.php'
];

$builder = new Builder($templates);

?>

<div class="text-right text-muted">
    <a href="index.php?r=document/default/index" class="text-muted"><i class="fas fa-arrow-left"></i></a>
</div>

<form id="needs-validation" action="" method="post" novalidate>
    <input type="hidden" name="metadata[set]" value="<?= $set ?>">
    
    <div class="inputbox p-3">
        <div class="form-group">
            <input placeholder="Document name" type="text" class="form-control input-sm" id="title" name="metadata[title]" <?= isset($model->title) ? 'value="'.$model->title.'"' : '' ?> required>
        </div>
        <?php foreach($forms as $form): ?>
            <p class="document-title text-dark"><a href="" class="toggle-block"><i class="fas fa-angle-right"></i> <?= $form['title'] ?></a></p>
            <div class="block">
                <?php $values = isset($body) ? $body : [] ?>
                <?= $builder->render($form['body'], $values); ?>
            </div>
        <?php endforeach; ?>
        
        <div class="text-right">
            <button type="submit" class="btn btn-sm btn-primary" role='button'><i class="fas fa-save"></i> Save</button>
        </div>
    </div>
</form>