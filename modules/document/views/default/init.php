<div class="main">
    <h3 class="main__title">New document</h3>
    <div class="row">
        <div class="col-md-8">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?r=document/default/index">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Document</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <?php if(!empty($models)): ?>
            <div class="col-md-4">
                <form id="needs-validation" action="" method="post" novalidate>
                    <div class="form-group">
                        <label for="set">Sets</label>
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
        <?php else:?>
            <div class="col-md-8">
                <div class="text-right mb-2">
                    <a class="btn btn-primary btn-sm" href="index.php?r=set/default/create"><i class="fas fa-plus"></i> Add set</a>
                </div>
                
                <div class="highlight border text-center p-3 mt-4">
                    <a href="index.php?r=set/default/index">Add at least one Set before adding a Document.</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>