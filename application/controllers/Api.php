<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo "string";
	}

	public function user(){
		header('Content-Type: application/json');
		switch ($this->input->method(TRUE)) {
			case 'GET':
				$users = [["name" => "Aleem", "rollNo"=> "1062313"],["name" => "Aamir", "rollNo"=> "645653"]];
				echo json_encode($users);
				break;
			case 'POST': 
				// if(!isset($_POST['name']) || !isset($_POST['rollno'])){
				// 	$this->output->set_status_header(404);
				// 	echo json_encode(["status" => false]);
				// 	break;
				// }
			var_dump($_REQUEST);
				// $name = $_POST['name'];
				// $rollno = $_POST['rollno'];
				// echo json_encode(["status"=> TRUE, "data" => [ "name"=> $name, "rollno" => $rollno]]);
				break;
			default:
				# code...
				break;
		}


		 
		

	}
}
