<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Plusmodel extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
 	public function plus($num1,$num2){
 		$result=$num1+$num2;
 		return $result;

 	}
	

}

/* End of file plusmodel.php */
/* Location: ./application/models/plusmodel.php */
?>