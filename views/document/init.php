<div class="main">
    <h3 class="main__title">New document</h3>
    <div class="row">
        <div class="col-md-4">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?r=form">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Document</li>
                </ol>
            </nav>
            
            <form id="needs-validation" action="" method="post" novalidate>
                <div class="form-group">
                    <label for="set">Set</label>
                    <select class="form-control" id="set" name="set" required>
                        <option value="">Choose a set...</option>
                        <?php foreach($models as $model): ?>
                            <option value="<?= $model->id ?>"><?= $model->title ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-sm" role='button'>Continue <i class="fas fa-arrow-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>