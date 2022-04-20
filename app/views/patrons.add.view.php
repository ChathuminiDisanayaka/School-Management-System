<?php  $this->view('includes/header') ?>
<?php  $this->view('includes/nav') ?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px">
    <?php  $this->view('includes/crumbs',['crumbs'=>$crumbs]) ?>

    <div class="card-group justify-content-center">
        <form method="post">
            <h3>Add New Patron</h3>

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

            <input autofocus class="form-control" type="text" name="firstname" placeholder="First Name" value="<?=get_var('firstname')?>"><br>
            <input autofocus class="form-control" type="text" name="middlename" placeholder="Middle Name" value="<?=get_var('middlename')?>"><br>
            <input autofocus class="form-control" type="text" name="lastname" placeholder="Last Name" value="<?=get_var('lastname')?>"><br>
            <input autofocus class="form-control" type="text" name="email" placeholder="Email Address" value="<?=get_var('email')?>"><br>
            <input autofocus class="form-control" type="text" name="nic" placeholder="NIC" value="<?=get_var('nic')?>"><br>
            <input autofocus class="form-control" type="text" name="phone_num" placeholder="Phone Number" value="<?=get_var('phone_num')?>"><br>
            <select class="my-2 form-control" name="gender">
                <option  <?=get_select('gender','')?> value="">---Select a Gender---</option>
                <option  <?=get_select('gender','male')?> value="male">Male</option>
                <option  <?=get_select('gender','female')?> value="female">Female</option>
            </select><br>
            <select class="my-2 form-control" name="rank">
                <option <?=get_select('rank','')?> value="">---Select a Rank---</option>
                <option <?=get_select('rank','student')?> value="student">Student</option>
                <option <?=get_select('rank','professor')?> value="professor">Professor</option>
                <option <?=get_select('rank','lecturer')?> value="lecturer">Lecturer</option>
                <option <?=get_select('rank','admin')?> value="admin">Admin</option>
                <option <?=get_select('rank','super_admin')?> value="super_admin">Super Admin</option>
            </select>

            <input class="btn btn-primary float-end" type="submit" value="Create">
            <a href="<?=ROOT?>/patrons">
                <input class="btn btn-danger text-white " type="button" value="Cancel">
            </a>
        </form>

    </div>

</div>
<?php  $this->view('includes/footer') ?>






