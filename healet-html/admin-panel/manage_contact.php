<?php
include_once('header.php');
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Manage Contact </h2>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h5>Table Sample One</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Contact No</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($data as $contact) {
                              ?>
                                <tr>
                                <td><?php echo $contact->id?></td>
                                <td><?php echo $contact->customer_Name?></td>
                                <td><?php echo $contact->Contact_No?></td>
                                <td><?php echo $contact->email?></td>
                                <td><img src="../admin-panel/upload/contactimg/<?php echo $contact->custImage?>"alt="" width="100px"></td>
                                    <td>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                        <a href="#" class="btn btn-info">Edit</a>

                                    </td>
                                </tr>
                                <?php
                                } 
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />

        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<?php
include_once('Footer.php');
?>