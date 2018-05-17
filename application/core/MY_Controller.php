<?php 
class WebController extends CI_Controller{

	var $data;
	
	public function __construct(){
       parent::__construct(); 

       $ci =& get_instance();

       $ci->load->model("get_model");

       //$this->data["contact"] = $ci->get_model->get_contact("configure")->row();
       //$this->data["seo"]     = $ci->get_model->get_seo("configure")->result();
	}

	public function loadView($views){
		$this->load->view('garden/header',$this->data);
		$this->load->view('garden/menu',$this->data);
		if(is_array($views)){
			foreach ($views as $view) {
				$this->load->view($view,$this->data);
			}
		}else{
			$this->load->view($views,$this->data);
		}
		$this->load->view('garden/footer',$this->data);
	}

}
?>

                       