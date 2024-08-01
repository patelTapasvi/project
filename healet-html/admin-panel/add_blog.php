<?php
include_once ('header.php');
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Add Blog </h2>
                <div class="row">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Blog Name</label>
                                <input type="text" name="Blog_name" class="form-control" />
                                <p class="help-block">Help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Blog Image</label>
                                <input type="file" name="image" class="form-control" placeholder="Blogs Image" />
                                <p class="help-block">Help text here.</p>
                            </div>

                            <input type="submit" name="submit" class="btn btn-danger btn-lg" value="Submit" />
                        </div>
                    </form>
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