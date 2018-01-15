<div class="main">
    <h3 class="main__title">Welcome</h3>
    
    <div class="row">
        <div class="col-md-8">
            
            <div class="text-right mb-2">
                <a class="btn btn-primary btn-sm" href="index.php?r=document/init"><i class="fas fa-plus"></i> Add document</a>
            </div>
            
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
                                    <a href="index.php?r=document/update&id=<?= $model->id ?>" class="text-dark">
                                        <?= $model->title ?>
                                    </a>
                                </div>
                                <div class="table__date text-muted">
                                    <a class="text-muted" target="_blank" href="<?= isset($_SERVER['HTTPS']) ? 'https' : 'http' ?>://<?= $_SERVER['HTTP_HOST'] ?>/index.php?r=api&key=<?= $model->uniqid ?>">
                                        <?= isset($_SERVER['HTTPS']) ? 'https' : 'http' ?>://<?= $_SERVER['HTTP_HOST'] ?>/index.php?r=api&key=<?= $model->uniqid ?>
                                    </a>
                                    <div>
                                        created at <?= date('d/m/Y H:m', strtotime($model->created_at)) ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>