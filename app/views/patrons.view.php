<?php  $this->view('includes/header') ?>
<?php  $this->view('includes/nav') ?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px">
    <?php  $this->view('includes/crumbs',['crumbs'=>$crumbs]) ?>

    <div class="card-group justify-content-center">

        <table class="table table-striped table-hover">
            <tr><th>Patron Name</th><th>NIC Number</th><th>Email Address</th><th>Rank</th><th>Date</th>
                <th>
                    <a href="<?=ROOT?>/patrons/add">
                        <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add New</button>
                    </a>
                </th>
            </tr>

            <?php if($rows):?>
                <?php foreach ($rows as $row):?>
                    <tr><td><?=$row->firstname?> <?=$row->middlename?>. <?=$row->lastname?>
                        <td><?=$row->nic?></td>
                        <td><?=$row->email?></td>
                        <td><?=$row->rank?></td>
                        <td><?=get_date($row->date)?></td>

                        <td>
                            <a href="<?=ROOT?>/patrons/edit/<?=$row->id?>">
                                <button class="btn btn-sm btn-info text-white">
                                    <i class="fa fa-edit"></i>
                                </button></a>

                            <a href="<?=ROOT?>/patrons/delete/<?=$row->id?>">
                                <button class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash-alt"></i>
                                </button></a>

                            <a href="<?=ROOT?>/patrons/show/<?=$row->id?>">
                                <button class="btn btn-sm btn-primary">
                                    <i class="fa fa-search"></i>
                                </button></a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            <?php else:?>
                <h4>No Patrons were found at this time</h4>
            <?php endif;?>
        </table>
    </div>

</div>
<?php  $this->view('includes/footer') ?>





