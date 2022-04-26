<?php  $this->view('includes/header') ?>
<?php  $this->view('includes/nav') ?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px">
    <?php  $this->view('includes/crumbs',['crumbs'=>$crumbs]) ?>

    <div class="card-group justify-content-center">
        <form method="post">
            <h3>Add New School</h3>

            <?php if(count($errors) > 0):?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Errors:</strong>
                    <?php foreach($errors as $error):?>
                        <br><?=$error?>
                    <?php endforeach;?>
                    <br> You should check in on some of those fields below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif;?>

            <input autofocus class="form-control" type="text" name="school" placeholder="School Name" value="<?=get_var('school')?>"><br><br>
            <input class="btn btn-primary float-end" type="submit" value="Create">
            <a href="<?=ROOT?>/schools">
             <input class="btn btn-danger text-white " type="button" value="Cancel">
            </a>
        </form>

    </div>

</div>
<?php  $this->view('includes/footer') ?>





