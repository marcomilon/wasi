<div class="main">
    <h3 class="main__title">New set</h3>
    <div class="row">
        <div class="col-md-8">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?r=set/default/index">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Set</li>
                </ol>
            </nav>
            
            <?php if(!empty($models)): ?>
                <?php include "_form.php" ?>
            <?php else:?>
                    <div class="text-right mb-2">
                        <a class="btn btn-primary btn-sm" href="index.php?r=form/default/create"><i class="fas fa-plus"></i> Add form</a>
                    </div>
                    
                    <div class="highlight border text-center p-3 mt-4">
                        <a href="index.php?r=form/default/index">Add at least one Form before adding a Set.</a>
                    </div>
            <?php endif; ?>
        </div>
    </div>
</div>