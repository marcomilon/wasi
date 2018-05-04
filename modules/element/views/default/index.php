<?php 

$this->parameters = [
    'title' => 'Elements'
];

?>
<div class="main">
    <h3 class="main__title">Elements</h3>
    
    <div class="row">
        <div class="col-md-8">
            
            <div class="text-right mb-2">
                <a class="btn btn-primary btn-sm" href="index.php?r=element/default/create"><i class="fas fa-plus"></i> Add element</a>
            </div>
            <?php if(!empty($models)): ?>
                <table class="table table-hover">
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
                                    <div><a href="index.php?r=element/default/update&id=<?= $model->id ?>"><?= $model->title ?></a></div>
                                    <div class="table__date text-muted">Created at <?= date('d/m/Y H:m', strtotime($model->created_at)) ?></div>
                                </td>
                                <td class="text-right align-middle">
                                    <a class="btn btn-secondary btn-sm" href="index.php?r=element/default/update&id=<?= $model->id ?>"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-secondary btn-sm" href="index.php?r=element/default/delete&id=<?= $model->id ?>"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else:?>
                <div class="highlight border text-center p-3 mt-4">
                    <a href="index.php?r=element/default/create">Nothing found. Would you like to add a new Element?</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
</div>