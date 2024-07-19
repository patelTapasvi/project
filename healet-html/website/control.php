<?php

include_once ('model.php'); // step 1 model include 


class control extends model  // step 2  extend model for func call 
{
	function __construct()
	{
		session_start();

		model::__construct(); // step 3 call model __construct for db connection

		$path = $_SERVER['PATH_INFO'];

		switch ($path) {
			case '/index':
				include_once ('index.php');
				break;
			case '/about':
				include_once ('about.php');
				break;
			case '/shop':
				include_once ('shop.php');
				break;
			case '/blog':
				include_once ('blog.php');
				break;
			case '/contact':
				if (isset($_REQUEST['submit'])) {
					$customer_Name = $_REQUEST['customer_Name'];
					$Contact_No = $_REQUEST['Contact_No'];
					$email = $_REQUEST['email'];
					$custImage = $_FILES['custImage']['name'];
					// image upload in project folder
					$path = '../admin-panel/upload/contactimg/' . $custImage;
					$tmp_file = $_FILES['custImage']['tmp_name'];
					move_uploaded_file($tmp_file, $path);

					$data = array("customer_Name" => $customer_Name, "Contact_No" => $Contact_No, "email" => $email, "custImage" => $custImage);

					$res = $this->insert('contact', $data);
					if ($res) {
						echo "<script>
							alert('Contact Success !');
						</script>";
					} else {
						echo "not success";

					}
				}
				include_once ('contact.php');
				break;

			case '/login':
				if (isset($_REQUEST['submit'])) {

					$email = $_REQUEST['email'];
					$password = md5($_REQUEST['password']); // pass encripted 

					$where = array("email" => $email, "password" => $password);
					$res = $this->select_where('userdetails', $where);
					$chk = $res->num_rows; // 0 means false & 1 means true  check row wise condition

					if ($chk == 1) {
						$data = $res->fetch_object(); // single data fetch 
						$_SESSION['uname'] = $data->username;
						$_SESSION['uid'] = $data->id;

						echo "<script>
								alert('Login Success !');
								window.location='index'
							</script>";
					} else {
						echo "<script>
								alert('Login Failed !');
							</script>";
					}
				}
				include_once ('login.php');
				break;

			case '/signup':
				if (isset($_REQUEST['submit'])) {
					$username = $_REQUEST['username'];
					$email = $_REQUEST['email'];
					$gender = $_REQUEST['gender'];
					$password = md5($_REQUEST['password']); // pass encripted 

					$img = $_FILES['img']['name'];
					// image upload in project folder
					$path = '../admin-panel/upload/userimg/' . $img;
					$tmp_file = $_FILES['img']['tmp_name'];
					move_uploaded_file($tmp_file, $path);

					$data = array(
						"username" => $username,
						"email" => $email,
						"gender" => $gender,
						"password" => $password,
						"img" => $img
					);

					$res = $this->insert('userdetails', $data);
					if ($res) {
						echo "<script>
									alert('Registered Success !');
									window.location='login';
								</script>";
					}
				}

				include_once ('signup.php');
				break;

			case '/profile':
				$where = array("id" => $_SESSION['uid']);
				$res = $this->select_where('userdetails', $where);
				$fetch = $res->fetch_object();
				include_once ('profile.php');
				break;

			case '/user_logout':
				unset($_SESSION['uid']);
				unset($_SESSION['uname']);
				echo "<script>
							alert('Logout Success !');
							window.location='index';
						</script>";
				break;

			default:
				echo "<h1 style='color:red;text-align:center'> Page Not Found </h1>";
				break;
		}
	}
}



$obj = new control;
?>