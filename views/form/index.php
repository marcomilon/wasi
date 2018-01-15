<div class="main">
    <h3 class="main__title">Forms</h3>
    
    <div class="row">
        <div class="col-md-8">
            
            <div class="text-right mb-2">
                <a class="btn btn-primary btn-sm" href="index.php?r=form/create"><i class="fas fa-plus"></i> Add form</a>
            </div>
            
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
                                <div><?= $model->title ?></div>
                                <div class="table__date text-muted">Created at <?= date('d/m/Y H:m', strtotime($model->created_at)) ?></div>
                            </td>
                            <td class="text-right align-middle">
                                <a class="btn btn-secondary btn-sm" href="index.php?r=form/update&id=<?= $model->id ?>"><i class="fas fa-pencil-alt"></i></a>
                                <a class="btn btn-secondary btn-sm" href="index.php?r=form/delete&id=<?= $model->id ?>"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>