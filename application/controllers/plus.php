
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plus extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->view('inputview');
		$this->load->model('Plusmodel');
	}

	public function index()
	{
		
	}
	public function get_plusmodel(){
		$num1=$this->input->post('number1');
		$num2=$this->input->post('number2');
		$data['res']=$this->Plusmodel->plus($num1,$num2);
		$this->load->view('plusview', $data, FALSE);
	}

}

/* End of file plus.php */
/* Location: ./application/controllers/plus.php */
?>