<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
                var   $title="Donate System Cleft KKU";
	public function index()
	{
		//$this->load->view('welcome_message');
                            $data["title"]=$this->title;
                            $this->load->view("login",$data);
	}
        public function checklogin()
        {
                 $data["title"]=$this->title;
                            $this->load->view("home",$data);
        }
        public function tb_donation() //table donation
        {
              $tb="donation";
              $this->db->order_by("date_donation","DESC");
              $query=$this->db->get($tb,10);
              
              foreach($query->result() as $row)
              {
                  $rows[]=$row;
              }
              echo json_encode($rows);
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */