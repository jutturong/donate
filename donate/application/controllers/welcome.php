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
              $tb="donation";
              $all=$this->db->query("select  *  from  $tb");
              $count= $all->num_rows();
              $page= ceil( $count/10  );
               for($i=0;$i<=$page;$i++)
               {
                     $rows["page"]=$i;
               }
               echo  json_encode($rows);
        }
        public function tb_donation() //table donation
        {
            $p = isset($_POST['page']) ? intval($_POST['page']) : 1;
             // $p = $this->input->get_post("page");

            $r = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
           //  $r = $this->input->get_post("rows");
             $cal=$p*10;
             $cal_=($p-1)*10;

              $tb="donation";
              $all=$this->db->query("select  *  from  $tb");
              $count= $all->num_rows();
              
              $section= $count/2;
           
              $this->db->order_by("date_donation","DESC");
            //  $query=$this->db->get($tb,$r,$cal);
             // $query=$this->db->get($tb,$cal,$r);
              // 
              
              //$query=$this->db->get($tb,10,$cal_);
          
              /*
              $row_limit = 10;
              if(  $r <=  $row_limit  && $p == 1  )
              {
                   $this->db->limit(    $section  , 0 );
              }
              elseif( $r > 10  && $p == 1 )
              {
                   $this->db->limit(  $row_limit , $r - 10 );
              }
              
              if( $p > 1  )
              {
                    $this->db->limit(  $row_limit , 20 );
              }
              */
              
                $this->db->limit(   10  );
           
              
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