<?php
include_once ('header.php');
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Manage Customer </h2>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h5>Table Sample One</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>username</th>
                                    <th>email</th>
                                    <th>gender</th>
                                    <th>Img</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $userdetails) {
                                    ?>
                                    <tr>
                                        <td><?php echo $userdetails->id ?></td>
                                        <td><?php echo $userdetails->username ?></td>
                                        <td><?php echo $userdetails->email ?></td>
                                        <td><?php echo $userdetails->gender ?></td>
                                        <td><img src="upload/userimg/<?php echo $userdetails->img; ?>" alt=""
                                                width="80px" /></td>
                                        <td><?php echo $userdetails->statau ?></td>

                                        <td>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                            <a href="#" class="btn btn-info">Edit</a>

                                        </td>
                                    </tr>
                                    <?php
                                } ?>
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
include_once ('Footer.php');
?>