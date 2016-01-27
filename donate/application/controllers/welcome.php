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
                var   $limit=15;
	public function index()
	{
		//$this->load->view('welcome_message');
                            $data["title"]=$this->title;
                            $this->load->view("login",$data);
	}
        public function checklogin()
        {
              
                            $data["title"]=$this->title;
                            
              $tb="donation";
              $all=$this->db->query("select  *  from  $tb");
            //  $count= $all->num_rows();
            // echo  $data["maxpage"]= ceil( $count/10  );
               $data["maxpage"]=$all->num_rows();
               $this->load->view("home",$data);
        }
        
        public  function page_danation()
        {
           # http://10.87.196.113/donate/index.php/welcome/page_danation
            
           // $p = isset($_POST['page']) ? intval($_POST['page']) : 1;
            $p=$this->uri->segment(3);
            $list=$this->uri->segment(4);
            $limit=$this->limit;
            $cal=($p - 1 )*$limit;
            
              $tb="donation";
              $all=$this->db->query("select  *  from  $tb");
              $count= $all->num_rows();
              
             if( $p > 1  ) 
             {
               $query=$this->db->get($tb,$this->limit, $cal);
             }
             elseif( $list > 15   )
             {
                  $query=$this->db->get($tb,$list);
             }
             elseif(  $list <= 15 )
             {
                  $query=$this->db->get($tb,$this->limit);
             
             }
               
              foreach($query->result() as $row)
              {
                  $rows[]=$row;
              }
              echo json_encode($rows);
             
          
        }
        public function tb_donation() //table donation
        {
            //$p = isset($_POST['page']) ? intval($_POST['page']) : 1;
            //$r = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
              $tb="donation";
              
              /*
              $all=$this->db->query("select  *  from  $tb");
              $count= $all->num_rows();
              $section= $count/2;
           */

             
              $this->db->limit(  $this->limit  );
            //   $this->db->order_by("id_donation","DESC");
               $query=$this->db->get($tb);     
               
              foreach($query->result() as $row)
              {
                  $rows[]=$row;
              }
              echo json_encode($rows);
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */