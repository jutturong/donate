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
    
                var   $title=" .:: โปรแกรมรายนามผู้บริจาคศูนย์ตะวันฉาย ::. ";
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
            $p = isset($_POST['page']) ? intval($_POST['page']) : 1;
            
            $r = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
            $cal=$p*$r;

              $tb="donation";
           
             // $this->db->order_by("date_donation","DESC");
              $query=$this->db->get($tb,$r,$cal);
              // $this->db->limit( $r ,$cal );
              
              foreach($query->result() as $row)
              {
                  $rows[]=$row;
              }
              echo json_encode($rows);
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */