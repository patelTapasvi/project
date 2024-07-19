<?php
if (isset($_SESSION['uid'])) {
} else {
    echo "<script>
		window.location='index'
		</script>";
}
include_once ('header.php');
?>


<!-- client section -->

<secti on class="client_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                profile
            </h2>
            </di v>
            <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <d iv class="carousel-item active">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="../admin-panel/upload/userimg/<?php echo $fetch->img; ?>" alt="" />
                                    </div>
                                    <div class="col-lg-12">
                                        <h1>Name : <?php echo $fetch->username; ?></h1><br>
                                        <p>Email : <?php echo $fetch->email; ?></p>
                                        <p>Gender : <?php echo $fetch->gender; ?></p>

                                        <a href="edit_user" class="btn btn-primary">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </body>

            </html>
            <?php
            include_once ('footer.php');
            ?>