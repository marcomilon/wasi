<div class="main">
    <h3 class="main__title">Documents</h3>
    
    <div class="row">
        <div class="col-sm-8">
            
            <div class="text-right mb-2">
                <a class="btn btn-primary btn-sm" href="index.php?r=document/set"><i class="fas fa-plus"></i> Add document</a>
            </div>
            
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
                                <div><?= $model->title ?></div>
                                <div class="table__date text-muted">Created at <?= date('d/m/Y H:m', strtotime($model->created_at)) ?></div>
                            </td>
                            <td class="text-right">
                                <a class="btn btn-secondary btn-sm" href="index.php?r=document/update&id=<?= $model->id ?>"><i class="fas fa-pencil-alt"></i></a>
                                <a class="btn btn-secondary btn-sm" href="index.php?r=document/delete&id=<?= $model->id ?>"><i class="far fa-trash-alt"></i></a>                                    
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>