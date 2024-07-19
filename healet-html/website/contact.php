<?php
include_once('header.php');
?>

<section class="info_section layout_padding2">
  <div class="container mt-5">
    <center>
      <div class="col-md-12">
        <h1>
          Contact Us
        </h1>
        <hr>
        <div class="info_contact">
          <form action="" method="POST" enctype="multipart/form-data">
          <table>
            <tr>
              <td><label for="customer_Name">Name : </label></td>
              <td><input type="text" class="form-control" name="customer_Name" placeholder="Name"></td>
            </tr>
            <tr>
            <td><label for="Contact_No">Contact No : </label></td>
              <td><input type="text"name="Contact_No" class="form-control" placeholder="Contact No"></td>
            </tr>
            <tr>
              <td><label for="email">Email : </label></td>
              <td><input type="email" class="form-control" name="email" placeholder="Email"></td>
            </tr>
            <tr>
              <td><label for="custImage">Profile Image :</label></td>
              <td><input type="file" name="custImage" placeholder="Pls select your photo"></td>
            </tr>
          </table>
          <button class="btn btn-primary"name="submit" type="submit">Submit</button>
          </form>
          <br>
        </div>
      </div>
      
    </div>
    </center>
  </div>
</section>
<?php
include_once('footer.php');
?>