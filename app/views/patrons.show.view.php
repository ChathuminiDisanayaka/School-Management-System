<?php $this->view('includes/header')?>
<?php $this->view('includes/nav')?>


    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px">
        <?php $this->view('includes/crumbs',['crumbs'=>$crumbs])?>


        <div class="card-group justify-content-center">
            <table class="table table-striped table-hover">
                <body>

                <?php if($rows):?>
                    <?php foreach ($rows as $row):?>
                        <tr>
                            <th>First Name: </th>
                            <td><?=$row->firstname?></td>
                        </tr>
                        <tr>
                            <th>Middle Name: </th>
                            <td><?=$row->middlename?></td>
                        </tr>
                        <tr>
                            <th>Last Name: </th>
                            <td><?=$row->lastname?></td>
                        </tr>

                        <tr>
                            <th>Email Address: </th>
                            <td><?=$row->email?></td>
                        </tr>
                        <tr>
                            <th>Rank: </th>
                            <td><?=$row->rank?></td>
                        </tr>
                        <tr>
                            <th>NIC: </th>
                            <td><?=$row->nic?></td>
                        </tr>
                        <tr>
                            <th>Phone Number: </th>
                            <td><?=$row->phone_num?></td>
                        </tr>
                        <tr>
                            <th>Gender: </th>
                            <td><?=$row->gender?></td>
                        </tr>
                        <tr>
                            <th>Date: </th>
                            <td><?=get_date($row->date)?></td>
                        </tr>
                    <?php endforeach;?>
                <?php endif;?>
                </body>
            </table>
            <a href="<?=ROOT?>/patrons">
                <button class="btn-sm btn-info text-white">Back</button>
            </a>


        </div>

    </div>

<?php $this->view('includes/footer')?>