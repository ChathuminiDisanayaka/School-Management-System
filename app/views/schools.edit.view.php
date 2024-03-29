<?php  $this->view('includes/header') ?>
<?php  $this->view('includes/nav') ?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px">
    <?php  $this->view('includes/crumbs',['crumbs'=>$crumbs]) ?>
    <?php if($row):?>
    <div class="card-group justify-content-center">
        <form method="post">
            <h3>Edit School</h3>
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

            <input autofocus class="form-control" type="text" name="school" placeholder="School Name" value="<?=get_var('school',$row[0]->school)?>"><br><br>
            <input class="btn btn-primary float-end" type="submit" value="Save">
            <a href="<?=ROOT?>/schools">
                <input class="btn btn-danger text-white " type="button" value="Cancel">
            </a>
        </form>
    </div>
    <?php else:?>
    <div style="text-align: center">
        That School was not found!!!<br><br>
        <a href="<?=ROOT?>/schools">
            <input class="btn btn-danger text-white " type="button" value="Cancel">
        </a>
    </div>
    <?php endif;?>

</div>
<?php  $this->view('includes/footer') ?>






