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
        public function  serch_donation()
        {
            # http://10.87.196.113/donate/index.php/welcome/serch_donation
                
               $ck=$this->session->userdata('sess_status_login'); 
               $this->authentication->check_authentication($ck);
                 $q = isset($_POST['q']) ? $_POST['q'] : '';  // the request parameter
                 
             $tb="donation";
             
             //$this->db->limit(  $this->limit  );
             
             // $name=trim($this->uri->segment(3));
           
             $this->db->like("name_donation",$q );
             $query=$this->db->get($tb);     
              foreach($query->result() as $row)
              {
                  $rows[]=$row;
              }
              echo json_encode($rows);       
        }
        public  function  search_by_name()
        {
            # http://10.87.196.113/donate/index.php/welcome/search_by_name
                  $ck=$this->session->userdata('sess_status_login'); 
               $this->authentication->check_authentication($ck);
            $tb="donation";
          //  $this->db->like("","");
             $this->db->limit(  $this->limit  );
             $id_donation=$this->uri->segment(3);
             $query=$this->db->get_where($tb,array("id_donation"=>$id_donation));     
              foreach($query->result() as $row)
              {
                  $rows[]=$row;
              }
              echo json_encode($rows); 
            
        }
        public function del_donation()
        {
             # http://10.87.196.113/donate/index.php/welcome/del_donation/69
            $tb="donation";
           $id=$this->uri->segment(3);
           if( $id > 0 )
           {
               $ck= $this->db->delete($tb, array('id_donation' => $id)); 
               if($ck )
               {
                    echo json_encode(array('success'=>true));
               }
               elseif( !$ck )
               {
                    echo json_encode(array('errorMsg'=>'Some errors occured.'));
               }
           }
        }
        public function tb_donation() //table donation
        {
            # http://10.87.196.113/donate/index.php/welcome/tb_donation
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
               $this->db->order_by("id_donation","DESC");
               $query=$this->db->get($tb);     
               
              foreach($query->result() as $row)
              {
                  $rows[]=$row;
              }
              echo json_encode($rows);
        }
        public  function  date_donate() //วันที่บริจาค
        {
            # http://10.87.196.113/donate/index.php/welcome/date_donate
                  $ck=$this->session->userdata('sess_status_login'); 
               $this->authentication->check_authentication($ck);
             $tb="donation";
            // $d1="2014-01-15";
            // $d2="2016-12-19";
             
               $ck=$this->session->userdata('sess_status_login'); 
                  $this->authentication->check_authentication($ck);
             $d1=$this->uri->segment(3);
             $d2=$this->uri->segment(4);
             /*
               SELECT *
FROM donation
WHERE date_donation
BETWEEN '2014-01-1'
AND '2016-12-1'
LIMIT 0 , 30 
              */
            $str=" select  *  from  $tb   where   date_donation   between  '$d1'  and  '$d2' ; ";
            $query=$this->db->query($str);
             foreach($query->result() as $row )
             {
                 $rows[]=$row;
             }
            echo  json_encode($rows);
        }
        public  function  amount_donate()
        {
            # http://10.87.196.113/donate/index.php/welcome/amount_donate/500
            //$am=500;
                  $ck=$this->session->userdata('sess_status_login'); 
               $this->authentication->check_authentication($ck);
            $am=$this->uri->segment(3);
            $tb="donation";
            $str=" select  *  from  $tb   where   amount  =  $am    ; ";
            $query=$this->db->query($str);
             foreach($query->result() as $row )
             {
                 $rows[]=$row;
             }
            echo  json_encode($rows);
        }
        
        public  function  amount_donate_caculate()
        {
            # http://10.87.196.113/donate/index.php/welcome/amount_donate/500
            //$am=500;
                  $ck=$this->session->userdata('sess_status_login'); 
               $this->authentication->check_authentication($ck);
            $am=$this->uri->segment(3);
            $tb="donation";
            $str=" select  *  from  $tb   where   amount  >=  $am    ; ";
            $query=$this->db->query($str);
             foreach($query->result() as $row )
             {
                 $rows[]=$row;
             }
            echo  json_encode($rows);
        }
        
        public function tax_donate()
        {
           // http://10.87.196.113/donate/index.php/welcome/tax_donate/1
               $ck=$this->session->userdata('sess_status_login'); 
               $this->authentication->check_authentication($ck);
                $tax=$this->uri->segment(3);
            if( $tax == 1 ||  $tax == 2  )   
            { 
                
                switch($tax )
                {
                    case 1:
                             $dtax="แบบธรรมดา";
                        break;
                    case 2:
                              $dtax="แบบลดหย่อนภาษี";
                        break;
                
                    
                }
                                $tb="donation";
                                $str=" select  *  from  $tb   where   tax='$dtax'    ; ";
                                $query=$this->db->query($str);
                                 foreach($query->result() as $row )
                                 {
                                     $rows[]=$row;
                                 }
                                echo  json_encode($rows);
            }
        }
        public  function combo_address()
        {
               //http://10.87.196.113/donate/index.php/welcome/cobo_address/
               $ck=$this->session->userdata('sess_status_login'); 
               $this->authentication->check_authentication($ck);
              $tb="donation";
             $q = isset($_POST['q']) ? $_POST['q'] : '';  // the request parameter
              // $q = $this->input->get_post("q");
             // $str=" select  *  from  $tb    ; ";
             // $str=" select  *  from  $tb   where  address  like('%$q%')  ; ";
             //  $query=$this->db->query($str);
            //  $this->db->like("address",  $q   );
             // $query=$this->db->get($tb,5);
              $query=$this->db->query(" select  *  from  $tb    where   address    like('%$q%')     ;    ");
                                 foreach($query->result() as $row )
                                 {
                                     $rows[]=$row;
                                 }
                                echo  json_encode($rows);
            
        }
        public  function  address()
        {
            //http://10.87.196.113/donate/index.php/welcome/address/ก
               $ck=$this->session->userdata('sess_status_login'); 
               $this->authentication->check_authentication($ck);
              $tb="donation";
              $id=$this->uri->segment(3);
           //   $str=" select  *  from  $tb   where  address  like('%$address%')  ; ";
              
             // $query=$this->db->query($str);
              $query=$this->db->get_where($tb,array("id_donation "=> $id ));
                                 foreach($query->result() as $row )
                                 {
                                     $rows[]=$row;
                                 }
                                echo  json_encode($rows);
        }
        
        public function  insert_donate()
        {
             //http://10.87.196.113/donate/index.php/welcome/insert_donate
                 $name_donation=trim($this->input->get_post("name_donation"));
                $lastname_donation=trim($this->input->get_post("lastname_donation"));
                  $date_donation=trim($this->input->get_post("date_donation"));
                    if( strlen($date_donation) > 0 )
                    {
                        $exd=explode("/",$date_donation);
                      $dmyconv=  $exd[2]."-".$exd[0]."-".$exd[1];        
                    }
                    
                      $tax=trim($this->input->get_post("tax"));
                    $num1=trim($this->input->get_post("num1"));
                     $num2=trim($this->input->get_post("num2"));
                   $amount=trim($this->input->get_post("amount"));
                   $address=trim($this->input->get_post("address"));
                    
                     $tb="donation";
                     $this->db->set("name_donation",$name_donation);
                      $this->db->set("lastname_donation",$lastname_donation);
                      $this->db->set("date_donation",$dmyconv);
                      $this->db->set("tax",$tax);
                      $this->db->set("num1",$num1);
                      $this->db->set("num2",$num2);
                      $this->db->set("amount",$amount);
                      $this->db->set("address",$address);
                      $ck=  $this->db->insert($tb);
                    if( $ck )
                    {
                        echo "บันทึกสำเร็จ";
                    }
                    elseif( $ck )
                    {
                        echo "บันทึกไม่ล้มเหลว";
                    }
        }
        
        public function  tb_user()
        {
             //http://10.87.196.113/donate/index.php/welcome/tb_user
            $name_donation=trim($this->input->get_post("name_donation"));
            $lastname_donation=trim($this->input->get_post("lastname_donation"));
            $tb="user";
            $query=$this->db->get($tb);
            foreach($query->result() as $row)
            {
                    $rows[]=$row;
            }
            echo  json_encode($rows);
        }
        
        public function  autocomp_donate()
        {
            //http://10.87.196.113/donate/index.php/welcome/grid_donate
             $tb="donation";
             //$name_donation=$this->input->get_post("name_donation");
              $q = isset($_POST['q']) ? $_POST['q'] : ''; 
             //$q = isset($_POST['q']) ? $_POST['q'] : '';
             $query=$this->db->query(" select  *   from  $tb   where  'name_donation'  like  ('%$q%');  ");
         //      $query=$this->db->query(" select  *   from  $tb   name_donation  like  ('%$q%');  ");
              foreach($query->result() as $row )      
              {
                    $rows[]=$row;
              }
              echo  json_encode($rows);
        }
        
        public function  fetch_donate()
        {
                     //http://10.87.196.113/donate/index.php/welcome/fetch_donate/8         
                      $tb="donation";
                      $id=$this->uri->segment(3);
                      $query=$this->db->get_where($tb,array("id_donation"=>$id));
                      foreach($query->result() as $row )
                      {
                                $rows[]=$row;
                      }
                       echo  json_encode($rows);
        }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */