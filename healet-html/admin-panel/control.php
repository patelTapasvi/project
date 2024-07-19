<?php


include_once ('../website/model.php'); // step 1 model include 


class control extends model  // step 2  extend model for func call 
{
	function __construct()
	{

		model::__construct(); // step 3 call model __construct for db connection

		$path = $_SERVER['PATH_INFO'];

		switch ($path) {
			case '/admin':
				include_once ('login.php');
				break;
			case '/dashboard':
				include_once ('dashboard.php');
				break;
			case '/add_categories':
				if (isset($_REQUEST['submit'])) {
					$categories_name = $_REQUEST['categories_name'];
					$image = $_FILES['image']['name'];
					// image upload in project folder
					$path = '../admin-panel/upload/categoryimg/' . $image;
					$tmp_file = $_FILES['image']['tmp_name'];
					move_uploaded_file($tmp_file, $path);

					$data = array("categories_name" => $categories_name, "image" => $image);

					$res = $this->insert('categories', $data);
					if ($res) {
						echo "<script>
								alert('add_categories Success !');
							</script>";
					} else {
						echo "not success";

					}
				}
				include_once ('add_categories.php');
				break;
			case '/manage_categories':
				$data = $this->select('categories');
				include_once ('manage_categories.php');
				break;
			case '/add_services':
				include_once ('add_services.php');
				break;
			case '/manage_services':
				$data = $this->select('services');
				include_once ('manage_services.php');
				break;
			case '/add_blog':
				include_once ('add_blog.php');
				break;
			case '/manage_blog':
				$data = $this->select('blog');
				include_once ('manage_blog.php');
				break;
			case '/manage_customer':
				$data = $this->select('userdetails');
				include_once ('manage_customer.php');
				break;
			case '/manage_contact':
				$data = $this->select('contact');
				include_once ('manage_contact.php');
				break;
			default:
				echo "<h1 style='text-align:center'>Page Not Found</h1>";
				break;
		}

	}
}
$obj = new control

	?>