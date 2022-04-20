<?php  $this->view('includes/header') ?>
<?php  $this->view('includes/nav') ?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px">
    <?php  $this->view('includes/crumbs',['crumbs'=>$crumbs]) ?>
    <?php if($row):?>
        <div class="card-group justify-content-center">
            <form method="post">
                <h3>Are you Sure You Want To Delete This Patron?!</h3>
                <input disabled autofocus class="form-control" type="text" name="firstname,middlename,lastname" placeholder="First Name" value="<?=get_var('firstname',$row[0]->firstname)?> <?=get_var('middlename',$row[0]->middlename)?>. <?=get_var('lastname',$row[0]->lastname)?>"><br><br>
                <input class="visually-hidden" name="id">
                <input class="btn btn-danger float-end" type="submit" value="Delete">
                <a href="<?=ROOT?>/patrons">
                    <input class="btn btn-success text-white " type="button" value="Cancel">
                </a>
            </form>
        </div>
    <?php else:?>
        <div style="text-align: center">
            That School was not found!!!<br><br>
            <a href="<?=ROOT?>/patrons">
                <input class="btn btn-danger text-white " type="button" value="Cancel">
            </a>
        </div>
    <?php endif;?>

</div>
<?php  $this->view('includes/footer') ?>







