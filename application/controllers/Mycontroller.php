<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycontroller extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		echo "hello";
	}

}

/* End of file Mycontroller.php */
/* Location: ./application/controllers/Mycontroller.php */
?>