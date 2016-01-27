<?php  ob_start(); ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
   
                var   $title=" .:: โปรแกรมรายนามผู้บริจาคศูนย์ตะวันฉาย ::. ";
                var   $limit=15;
                
                    function __construct()
                    {
                        // Call the Model constructor
                          parent::__construct();
                          $this->load->model('authentication');
                    }
                    
                    
	public function index()
	{
		//$this->load->view('welcome_message');
                            $data["title"]=$this->title;
                            $this->load->view("login",$data);
                            
                                 $arr_login=array(
                                                'sess_UserName'=>"",
                                                'sess_UserSurname'=>"",
                                                'sess_UserType'=>"",
                                                'sess_UserCode'=>"",
                                                'sess_Unused'=>"",
                                                'sess_status_login'=>0,
                                            );
                                       $this->session->set_userdata($arr_login);
                                       
	}
        public function checklogin()
        {
              echo'<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
              
               $UserName=$this->input->get_post("Username");
           
               $Password=$this->input->get_post("Password");
           
               $tb="user";
               $Query=$this->db->get_where($tb,array("username"=> $UserName,"password"=>$Password ));
               $ck=$Query->num_rows();
               
               if( $ck == 1 )
               {
                   
                    $arr_login=array(
                                                'sess_UserName'=> $UserName,
                                                'sess_status_login'=>1,
                                            );
                   $this->session->set_userdata($arr_login);
                                       
                  // $this->session->userdata('sess_UserName');              
                  //  $this->session->userdata('sess_status_login');           
               
                            $data["title"]=$this->title;
                            
              $tb="donation";
              $all=$this->db->query("select  *  from  $tb");
            //  $count= $all->num_rows();
            // echo  $data["maxpage"]= ceil( $count/10  );
               $data["maxpage"]=$all->num_rows();
               $this->load->view("home",$data);
               }
               else
               {
                  redirect("welcome/index/");
               }
        }
        
        public  function page_danation()
        {
           # http://10.87.196.113/donate/index.php/welcome/page_danation
          // $this->session->userdata('sess_status_login'); 
          //  $this->authentication->heck_authentication();
           // $p = isset($_POST['page']) ? intval($_POST['page']) : 1;
               $ck=$this->session->userdata('sess_status_login'); 
               $this->authentication->check_authentication($ck);
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
               $ck=$this->session->userdata('sess_status_login'); 
               $this->authentication->check_authentication($ck);
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