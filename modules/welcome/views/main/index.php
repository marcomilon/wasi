<?php 

$this->parameters = [
    'title' => 'Welcome'
];

?>
<div class="main">
    <h3 class="main__title">Welcome</h3>
    
    <div class="row">
        <div class="col-md-8">
            
            <div class="text-right mb-2">
                <a class="btn btn-primary btn-sm" href="index.php?r=document/default/init"><i class="fas fa-plus"></i> Add document</a>
            </div>
            
            <?php if(!empty($models)): ?>
                <table class="table mb-2">
                    <thead>
                        <tr>
                            <th scope="col" class="table__header">Available endpoints</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($models as $model): ?>
                            <tr>
                                <td class="align-middle">
                                    <div>
                                        <a href="index.php?r=document/default/update&id=<?= $model->id ?>">
                                            <?= $model->title ?>
                                        </a>
                                    </div>
                                    <div class="table__date text-muted">
                                        <a class="text-muted" target="_blank" href="index.php?r=api/default/index&key=<?= $model->uniqid ?>">
                                            <?= isset($_SERVER['HTTPS']) ? 'https' : 'http' ?>://<?= $_SERVER['HTTP_HOST'] ?>/index.php?r=api&key=<?= $model->uniqid ?>
                                        </a>
                                        <div>
                                            Created at <?= date('d/m/Y H:m', strtotime($model->created_at)) ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else:?>
                <div class="highlight border text-center p-3 mt-4">
                    <a href="index.php?r=document/default/init">No documents found.</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>