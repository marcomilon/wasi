<?php 

use micro\form\Builder;

$builder = new Builder();

?>
<form  id="needs-validation" action="" method="post" novalidate>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" <?= isset($model->title) ? 'value="'.$model->title.'"' : '' ?>" required>
    </div>
    
    <?php foreach($forms as $form): ?>
        <?= $builder->render($microForm); ?>
    <?php endforeach; ?>
</form>