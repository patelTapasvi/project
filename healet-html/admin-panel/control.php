<?php


include_once ('../website/model.php'); // step 1 model include 


class control extends model  // step 2  extend model for func call 
{
	function __construct()
	{
		session_start();

		model::__construct(); // step 3 call model __construct for db connection

		$path = $_SERVER['PATH_INFO'];

		switch ($path) {
			case '/admin':
				if (isset($_REQUEST['submit'])) {

					$email = $_REQUEST['email'];
					$password = $_REQUEST['password']; // pass encripted 

					$where = array("email" => $email, "password" => $password);
					$res = $this->select_where('admindetails', $where);
					$chk = $res->num_rows; // 0 means false & 1 means true  check row wise condition

					if ($chk = 1) {

						$data = $res->fetch_object(); // single data fetch 
						$_SESSION['aname'] = $data->name;
						$_SESSION['aid'] = $data->a_id;

						echo "<script>
							alert('Login Success !');
							window.location='index';
						</script>";
					} else {
						echo "<script>
							alert('Login Failed !');
						</script>";
					}
				}
				include_once ('login.php');
				break;
			case '/admin_logout':
				unset($_SESSION['aid']);
				unset($_SESSION['aname']);
				echo "<script>
							alert('Logout Success !');
							window.location='admin'
						</script>";
				break;
			case '/index':
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
				if (isset($_REQUEST['submit'])) {
					$services_name = $_REQUEST['services_name'];
					$image = $_FILES['image']['name'];
					// image upload in project folder
					$path = '../admin-panel/upload/serviceimg/' . $image;
					$tmp_file = $_FILES['image']['tmp_name'];
					move_uploaded_file($tmp_file, $path);

					$data = array("services_name" => $services_name, "image" => $image);

					$res = $this->insert('services', $data);
					if ($res) {
						echo "<script>
								alert('add_services Success !');
							</script>";
					} else {
						echo "not success";

					}
				}
				include_once ('add_services.php');
				break;
			case '/manage_services':
				$data = $this->select('services');
				include_once ('manage_services.php');
				break;
			case '/add_blog':
				if (isset($_REQUEST['submit'])) {
					$Blog_name = $_REQUEST['Blog_name'];
					$image = $_FILES['image']['name'];
					// image upload in project folder
					$path = '../admin-panel/upload/Blogimg/' . $image;
					$path = $image;
					$tmp_file = $_FILES['image']['tmp_name'];
					move_uploaded_file($tmp_file, $path);

					$data = array("Blog_name" => $Blog_name, "image" => $image);

					$res = $this->insert('blog', $data);
					if ($res) {
						echo "<script>
								alert('add_blog Success !');
							</script>";
					} else {
						echo "not success";

					}
				}
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
			case '/user_logout':
				unset($_SESSION['aid']);
				unset($_SESSION['aname']);
				echo "<script>
								alert('Logout Success !');
								window.location='index';
							</script>";
				break;
			case '/delete':

				if (isset($_REQUEST['dblog'])) {
					$id = $_REQUEST['dblog'];

					$where = array("id" => $id);
					$res = $this->delete_where('blog', $where);
					if ($res) {
						echo "<script>
								alert('blog Delete Success !');
								window.location='manage_blog'
							</script>";
					}
				}

				if (isset($_REQUEST['dcag'])) {
					$id = $_REQUEST['dcag'];

					$where = array("id" => $id);
					$res = $this->delete_where('categories', $where);
					if ($res) {
						echo "<script>
								alert('categories Delete Success !');
								window.location='manage_categories'
							</script>";
					}
				}

				if (isset($_REQUEST['dcontact'])) {
					$id = $_REQUEST['dcontact'];

					$where = array("id" => $id);
					$res = $this->delete_where('contact', $where);
					if ($res) {
						echo "<script>
								alert('contact Delete Success !');
								window.location='manage_contact'
							</script>";
					}
				}

				if (isset($_REQUEST['dcus'])) {
					$id = $_REQUEST['dcus'];

					$where = array("id" => $id);
					$res = $this->delete_where('userdetails', $where);
					if ($res) {
						echo "<script>
								alert(' userdetails Delete Success !');
								window.location='manage_customer'
							</script>";
					}
				}

				if (isset($_REQUEST['dser'])) {
					$id = $_REQUEST['dser'];

					$where = array("id" => $id);
					$res = $this->delete_where('services', $where);
					if ($res) {
						echo "<script>
								alert('services Delete Success !');
								window.location='manage_services'
							</script>";
					}
				}



				if (isset($_REQUEST['duser'])) {
					$id = $_REQUEST['duser'];

					$where = array("id" => $id);

					// get data for img delete
					$resdata = $this->select_where('users', $where);
					$fetch = $resdata->fetch_object();
					$del_img = $fetch->img;

					$res = $this->delete_where('users', $where);
					if ($res) {
						unlink('upload/users/' . $del_img); // delete image from path
						echo "<script>
									alert('Users Delete Success !');
									window.location='manage_user'
								</script>";
					}
				}
				break;

			case '/edit':
				if (isset($_REQUEST['e_blog'])) {
					$id = $_REQUEST['e_blog'];

					$where = array("id" => $id);
					$res = $this->select_where('blog', $where);
					$fetch = $res->fetch_object();

					if (isset($_REQUEST['save'])) {
						$Blog_name = $_REQUEST['Blog_name'];
						if ($_FILES['image']['size'] > 0) {
							// get old_img name
							$old_img = $fetch->image;

							$image = $_FILES['image']['name'];
							$path = 'upload/Blogimg/' . $image;
							$tmp_file = $_FILES['image']['tmp_name'];
							move_uploaded_file($tmp_file, $path);

							$data = array("Blog_name" => $Blog_name, "image" => $image);

							$res = $this->update_where('blog', $data, $where);
							if ($res) {
								unlink('upload/Blogimg/' . $old_img);
								echo "<script>
										alert('blog Update Success !');
										window.location='manage_blog';
									</script>";
							}

						} else {
							$data = array("Blog_name" => $Blog_name);
							$res = $this->update_where('blog', $data, $where);
							if ($res) {
								echo "<script>
										alert('blog Update Success !');
										window.location='manage_blog';
									</script>";
							}
						}

					}

				}
				include_once ('edit_blog.php');
				break;

			case '/edit_categories':
				if (isset($_REQUEST['e_categories'])) {
					$id = $_REQUEST['e_categories'];

					$where = array("id" => $id);
					$res = $this->select_where('categories', $where);
					$fetch = $res->fetch_object();

					if (isset($_REQUEST['save'])) {
						$categories_name = $_REQUEST['categories_name'];
						if ($_FILES['image']['size'] > 0) {
							// get old_img name
							$old_img = $fetch->image;

							$image = $_FILES['image']['name'];
							$path = 'upload/categoryimg/' . $image;
							$tmp_file = $_FILES['image']['tmp_name'];
							move_uploaded_file($tmp_file, $path);

							$data = array("categories_name" => $categories_name, "image" => $image);

							$res = $this->update_where('categories', $data, $where);
							if ($res) {
								unlink('upload/categoryimg/' . $old_img);
								echo "<script>
										alert('categories Update Success !');
										window.location='manage_categories';
									</script>";
							}

						} else {
							$data = array("categories_name" => $categories_name);
							$res = $this->update_where('categories', $data, $where);
							if ($res) {
								echo "<script>
										alert('categories Update Success !');
										window.location='manage_categories   ';
									</script>";
							}
						}

					}

				}
				include_once ('edit_categories.php');
				break;

			case '/edit_services':
				if (isset($_REQUEST['e_services'])) {
					$id = $_REQUEST['e_services'];

					$where = array("id" => $id);
					$res = $this->select_where('services', $where);
					$fetch = $res->fetch_object();

					if (isset($_REQUEST['save'])) {
						$services_name = $_REQUEST['services_name'];
						if ($_FILES['image']['size'] > 0) {
							// get old_img name
							$old_img = $fetch->image;

							$image = $_FILES['image']['name'];
							$path = 'upload/serviceimg/' . $image;
							$tmp_file = $_FILES['image']['tmp_name'];
							move_uploaded_file($tmp_file, $path);

							$data = array("services_name" => $services_name, "image" => $image);

							$res = $this->update_where('services', $data, $where);
							if ($res) {
								unlink('upload/serviceimg/' . $old_img);
								echo "<script>
											alert('services Update Success !');
											window.location='manage_services';
										</script>";
							}

						} else {
							$data = array("services_name" => $services_name);
							$res = $this->update_where('services', $data, $where);
							if ($res) {
								echo "<script>
											alert('services Update Success !');
											window.location='manage_services   ';
										</script>";
							}
						}

					}

				}
				include_once ('edit_services.php');
				break;






			default:
				echo "<h1 style='text-align:center'>Page Not Found</h1>";
				break;
		}

	}
}
$obj = new control

	?>