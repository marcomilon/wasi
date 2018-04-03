<?php 

$this->parameters = [
    'title' => 'Documents'
];

?>
<div class="main">
    <h3 class="main__title">Documents</h3>
    
    
    <div class="row">
        <div class="col-md-4">
            <?php include "_filterby.php" ?>
        </div>
        <div class="col-md-4">
            <div class="text-right mb-2">
                <a class="btn btn-primary btn-sm <?= empty($sets) ? 'disabled' : '' ?>" href="index.php?r=document/default/init"><i class="fas fa-plus"></i> Add document</a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8">
                        
            <?php if(!empty($models)): ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="table__header">Title</th>
                            <th scope="col" class="table__header"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($models as $model): ?>
                            <tr>
                                <td class="align-middle">
                                    <div><a href="index.php?r=document/default/update&id=<?= $model->id ?>"><?= $model->title ?></a></div>
                                    <div class="table__date text-muted">
                                        <a class="text-muted" href="<?= isset($_SERVER['HTTPS']) ? 'https' : 'http' ?>://<?= $_SERVER['HTTP_HOST'] ?>/index.php?r=api&key=<?= $model->uniqid ?>">
                                            <?= isset($_SERVER['HTTPS']) ? 'https' : 'http' ?>://<?= $_SERVER['HTTP_HOST'] ?>/index.php?r=api&key=<?= $model->uniqid ?>
                                        </a>
                                        <div>
                                            Created at <?= date('d/m/Y H:m', strtotime($model->created_at)) ?>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <a class="btn btn-secondary btn-sm" href="index.php?r=document/default/update&id=<?= $model->id ?>"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-secondary btn-sm" href="index.php?r=document/default/delete&id=<?= $model->id ?>"><i class="far fa-trash-alt"></i></a>                                    
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php elseif(empty($sets)):?>
                <div class="highlight border text-center p-3 mt-4">
                    <a href="index.php?r=set/default/index">Add at least one Set before adding a Document.</a>
                </div>
            <?php else:?>
                <div class="highlight border text-center p-3 mt-4">
                    <a href="index.php?r=document/default/init">Nothing found. Would you like to add a new Document?</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
</div>