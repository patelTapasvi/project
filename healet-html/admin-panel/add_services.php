<?php
include_once('header.php');
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Add Services </h2>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Services Name</label>
                            <input type="text" name="name" class="form-control" />
                            <p class="help-block">Help text here.</p>
                        </div>
                        <div class="form-group">
                            <label>Services Image</label>
                            <input type="file" name="file" class="form-control" />
                            <p class="help-block">Help text here.</p>
                        </div>

                        <input type="submit" class="btn btn-danger btn-lg" value="Submit" />
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