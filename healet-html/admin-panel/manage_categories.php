<?php
include_once ('header.php');
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Manage Categories </h2>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h5>Table Sample One</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Categories Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $categories) {

                                    ?>
                                    <tr>
                                        <td><?php echo $categories->id ?></td>
                                        <td><?php echo $categories->categories_name ?></td>
                                        <td><img src="upload/categoryimg/<?php echo $categories->image ?>" width="100px">
                                        </td>
                                        <td>
                                            <a href="delete?dcag=<?php echo $categories->id; ?>"
                                                class="btn btn-danger">Delete</a>
                                            <a href="edit_categories?e_categories" class="btn btn-info">Edit</a>

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