<?php
include_once ('header.php');
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>edit Categories </h2>
                <div class="row">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Categories Name</label>
                                <input class="form-control" type="text" name="categories_name">
                            </div>
                            <div class="form-group">
                                <label>Categories Image</label>
                                <input class="form-control" name="image" type="file">
                                <img src="upload/categoryimg/<?php echo $fetch->image; ?>" alt="" width="150px">
                                <p class="help-block">Help text here.</p>
                            </div>
                            <button class="btn-primary" type="submit" name="save">Save Data</button>
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