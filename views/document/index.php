<div class="main">
    <h3 class="main__title">Documents</h3>
    
    <a class="btn btn-primary" href="index.php?r=document/set">New document</a>
    
    <div class="row mt-5">
        <div class="col-sm-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Title</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($models as $model): ?>
                        <tr>
                            <td class="align-middle table__date">
                                <?= date('d/m/Y H:m', strtotime($model->created_at)) ?>
                            </td>
                            <td class="align-middle">
                                <?= $model->title ?>
                            </td>
                            <td class="text-right">
                                <a class="btn btn-primary btn-sm" href="index.php?r=document/update&id=<?= $model->id ?>">Update</a>
                                <a class="btn btn-danger btn-sm" href="index.php?r=document/delete&id=<?= $model->id ?>">Delete</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>