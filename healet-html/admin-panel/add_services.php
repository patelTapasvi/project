﻿<?php
include_once ('header.php');
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>edit Services </h2>
                <div class="row">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Services Name</label>
                                <input type="text" name="services_name" class="form-control "
                                    placeholder="services Name" />
                                <p class="help-block">Help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Services Image</label>
                                <input type="file" name="image" class="form-control" placeholder="services Image" />
                                <p class="help-block">Help text here.</p>
                            </div>

                            <input type="submit" name="submit" class="btn btn-danger btn-lg" value="Submit" />
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