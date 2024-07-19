<?php
include_once('header.php');
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Manage Blog </h2>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h5>Table Sample One</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Blog Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                 foreach ($data as $blog) {
                                
                                ?>
                                <tr>
                                <td><?php echo $blog->id?></td>
                                <td><?php echo $blog->Blog_name?></td>
                                    <td><img src"<?php echo $blog->image?>"alt="" width="150px"></td>
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
include_once('Footer.php');
?>