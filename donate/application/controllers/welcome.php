<?php  ob_start(); ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
   
                var   $title=" .:: โปรแกรมรายนามผู้บริจาคศูนย์ตะวันฉาย ::. ";
                var   $limit=15;
                var   $tb_main="donation";
                
                    function __construct()
                    {
                        // Call the Model constructor
                          parent::__construct();
                          $this->load->helper('date');
                          $this->load->model('authentication');
                          $this->load->helper('file');
                          $this->load->helper('directory');
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
        
        public function hbd()  //check  วัน-เดือน-ปี เกิด
        {
           // http://10.87.196.113/donate/index.php/welcome/hbd
                    $tb="donation";
                    $bd= date("Y-m-d");  //2014-07-26
               //    $bd="2014-07-26";
                   // echo "<br>";
                    $q=$this->db->get_where($tb,array("bmd"=>$bd));
                    $ckeck_rows=$q->num_rows();
                    if( $ckeck_rows > 0 )
                    {
                            foreach($q->result() as $row)
                            {
                                $rows[]=$row;
                            }
                    echo json_encode($rows);
                    }
                 
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
               //$q=trim($this->input->get_post("q"));
                 
             $tb="donation";
             
             //$this->db->limit(  $this->limit  );
             
             // $name=trim($this->uri->segment(3));
           
             /*
              $this->db->like("name_donation",$q );
             $query=$this->db->get($tb);   
            */
             
              $query=$this->db->query("  select  *   from   $tb  where  `name_donation`  like('%$q%');   ");
             
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
        
        public function  call_tb_donate()
        {
            // http://10.87.196.113/donate/index.php/welcome/call_tb_donate
            $tb="donation";
            $query=$this->db->get($tb);
                    foreach($query->result() as $row)
                    {
                        $rows[]=$row;
                    }
                    echo json_encode($rows);
        }
     
        public  function  edit_donate()
        {
            // http://10.87.196.113/donate/index.php/welcome/edit_donate
               $tb="donation";
                 $id_donation=trim($this->input->get_post("id_donation"));
                //echo "<br>";
             $edit_num1=trim($this->input->get_post("edit_num1"));
              //echo "<br>";
              $edit_num2=trim($this->input->get_post("edit_num2"));
               //echo "<br>";
               $edit_name_donation=trim($this->input->get_post("edit_name_donation"));
               //echo "<br>";
              $edit_lastname_donation=trim($this->input->get_post("edit_lastname_donation"));
              // echo "<br>";
               $edit_date_donation=trim($this->input->get_post("edit_date_donation"));
              // echo "<br>";
                $conv_edit_date_donation=$this->authentication->conv_date( $edit_date_donation);
              //  echo "<br>";
               $edit_tax=trim($this->input->get_post("edit_tax"));   
              // echo "<br>";
               $edit_amount=trim($this->input->get_post("edit_amount")); 
               //echo "<br>";
                $edit_address=trim($this->input->get_post("edit_address"));
                //echo "<br>";
                if( $id_donation > 0 )
                {
                    $data=array(
                        "num1"=>$edit_num1,
                        "num2"=>$edit_num2,
                        "name_donation"=>$edit_name_donation,
                        "lastname_donation"=>$edit_lastname_donation,
                        "date_donation"=>$conv_edit_date_donation,
                        "tax"=>$edit_tax,
                        "amount"=>$edit_amount,
                        "address"=>$edit_address,
                    );
                    $this->db->where("id_donation",$id_donation);
                    $ck=   $this->db->update($tb,$data);
                    if( $ck )
                    {
                        echo "success";
                    }else
                    {
                        echo "false";    
                    }
                
                }
        }
        
         public function tb_donation_desc_id() //table donation
        {
            # http://10.87.196.57/donate/index.php/welcome/tb_donation_desc_id
            //$p = isset($_POST['page']) ? intval($_POST['page']) : 1;
            //$r = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
            
             //  $ck=$this->session->userdata('sess_status_login'); 
             //  $this->authentication->check_authentication($ck);
              $tb="donation";
              
              /*
              $all=$this->db->query("select  *  from  $tb");
              $count= $all->num_rows();
              $section= $count/2;
           */

             
            //  $this->db->limit(  $this->limit  );
               $this->db->order_by("id_donation","DESC");
             //  $query=$this->db->get($tb);     
             // $this->db->order_by("date_donation","DESC");
              $query=$this->db->get($tb,20,0);
                    foreach($query->result() as $row)
                    {
                       $rows[]=$row;
                    }
                    echo json_encode($rows);
        }
        
        public  function  del_file()
        {
             # http://10.87.196.113/donate/index.php/welcome/del_file/712
                    $id_donation=$this->uri->segment(3);
                    if(   $id_donation > 0  )
                    {
                        $tb=$this->tb_main;
                         $data=array("filename"=>"");
                          $this->db->where("id_donation",$id_donation);
                          $ck=$this->db->update($tb,$data);
                           if( $ck )
                             {
                                   echo  "1";
                             }
                                else
                                {
                                      echo "0";
                                }
                    }
        }
        
        public function tb_donation() //table donation
        {
            # http://10.87.196.113/donate/index.php/welcome/tb_donation
            //$p = isset($_POST['page']) ? intval($_POST['page']) : 1;
            //$r = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
            
             //  $ck=$this->session->userdata('sess_status_login'); 
             //  $this->authentication->check_authentication($ck);
              $tb="donation";
              
              /*
              $all=$this->db->query("select  *  from  $tb");
              $count= $all->num_rows();
              $section= $count/2;
           */

             
            //  $this->db->limit(  $this->limit  );
            //   $this->db->order_by("id_donation","DESC");
             //  $query=$this->db->get($tb);     
              $this->db->order_by("date_donation","DESC");
              $query=$this->db->get($tb,20,0);
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
        
        public  function  amount_donate_caculate2()
        {
            # http://10.87.196.113/donate/index.php/welcome/amount_donate/500
            //$am=500;
                  $ck=$this->session->userdata('sess_status_login'); 
               $this->authentication->check_authentication($ck);
            $am=$this->uri->segment(3);
            $tb="donation";
            $str=" select  *  from  $tb   where   amount  <=  $am    ; ";
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
          //    echo  "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">";
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
                   
                   
               $file1name = $_FILES['file1']['name'];
             
                 
                   
         //  $file1name =   iconv("utf-8", "UTF-8",  $file1name );
              $dater =  mdate( "%Y%m%d" );
            //  $dater=mdate( "%h:%i:%s" );
             //  echo  $iconv;
                
                $file1tmp  =$_FILES['file1']["tmp_name"]; // tmp folder
               $file1Type= $_FILES['file1']["type"]; //type of file
               $file1Size= $_FILES['file1']["size"]; //size
               $file1ErrorMsg = $_FILES['file1']["error"]; // 0=false 1=true
               
               
               $rand1=  $dater.rand(0,500).".doc";
         
               if(  $file1name != ""  )
               {  
                $cp1=copy($file1tmp ,  "uploadfile/".  $rand1  );
               }
               
                /*
                $fp = fopen(   $file1tmp ,"r");  
               $ReadBinary = fread($fp,filesize($_FILES["file1"]["tmp_name"]));
              $FileData = addslashes($ReadBinary);
                */
                 
                
                /*
                if( $cp1 )
                {
                    echo "success";
                }
                else
                {
                     echo "false";
                }
                   */
          
              
                     $tb="donation";
                     $this->db->set("name_donation",$name_donation);
                      $this->db->set("lastname_donation",$lastname_donation);
                      if(  $date_donation  != "" )
                      {
                      $this->db->set("date_donation",$dmyconv);
                      }
                      
                      $this->db->set("tax",$tax);
                      $this->db->set("num1",$num1);
                      $this->db->set("num2",$num2);
                      $this->db->set("amount",$amount);
                      $this->db->set("address",$address);
                      $this->db->set("filename",  $rand1 );   
           
                   //   $q_ck= $this->db->get_where($tb,array("name_donation"=>$name_donation,"lastname_donation"=>$lastname_donation));
                  //   $num_ck=  $q_ck->num_rows();
                      
                      $tel=trim($this->input->get_post("tel"));
                      $this->db->set("tel",$tel);
                      
                      $birthdmy=trim($this->input->get_post("birthdmy"));
                       if( strlen($birthdmy) > 0 )
                            {
                                $exd_1=explode("/",$birthdmy);
                                $birthdmy_conv=  $exd_1[2]."-".$exd_1[0]."-".$exd_1[1];    
                                  $this->db->set("bmd",$birthdmy_conv);
                            }
                    
      
                      $email=trim($this->input->get_post("email"));
                      $this->db->set("email",  $email );
                      
                      $id_type_donate=trim($this->input->get_post("id_type_donate"));
                       $this->db->set("id_type_donate",   $id_type_donate );
                      
                      $ck=  $this->db->insert($tb);
                                if( $ck    )
                                {
                                    echo "บันทึกสำเร็จ";
                                }
                                elseif( $ck )
                                {
                                    echo "บันทึกไม่ล้มเหลว";
                                }
      
                          
        }
        
  
        
        public function downloadfile1()
        {
            //      http://10.87.196.113/donate/index.php/welcome/downloadfile1/ลดหย่อน (บริจาครายการผู้หญิงถึงผู้ญิง 3).doc
           // $file=$this->uri->segment(3);
            /*
             header("Content-type: ".$data->MIME);
              ibase_blob_echo ($data->IMAGEDATA); 
             * 
             */
            
            $tb="donation";
            $file="ลดหย่อน (บริจาครายการผู้หญิงถึงผู้ญิง 3).doc";
            
            $query=$this->db->get_where($tb,array("fileupload1"=>$file));
           // echo " <meta charset=\"UTF-8\"> ";
            echo  "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">";
           // foreach($query->result($query,PDO::FETCH_ASSOC) as $row)
             foreach($query->result() as $row)
            {
              
              echo   $f_name1=$row->fileupload1;
                // header("Content-type: ". $f_name1 );
              //  header("Content-Disposition: attachment; filename=$f_name1");
               // header("Content-type: application/filename");
               //  header("Content-type: application/vnd.ms-word");
              //   header("Content-Disposition: attachment; filename=testing.doc");
               //  '<img src="data:image/jpeg;base64,'.base64_encode(  $f_name1  ).'"/>';
               
               //   header("Content-Length: $size");
              //    header("Content-Type: $type");
                //  header("Content-Disposition: attachment; filename=\"$f_name1\"");
                  
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
            //http://10.87.196.113/donate/index.php/welcome/autocomp_donate
             $tb="donation";
             //$name_donation=$this->input->get_post("name_donation");
              //$q = isset($_POST['q']) ? $_POST['q'] : ''; 
                $q = trim($this->input->get_post("q"));
            
            // $query=$this->db->query(" select  *   from  $tb   where  'name_donation'  like  ('%$q%');  ");
         //      $query=$this->db->query(" select  *   from  $tb   name_donation  like  ('%$q%');  ");
                $this->db->like("name_donation",$q);
                $query=$this->db->get($tb);
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
        
        public  function  sum_donate()
        {
               //http://10.87.196.113/donate/index.php/welcome/sum_donate    
                       $tb="donation";
                     // $this->db->select_sum("amount");
                     //  $query=$this->db->get($tb);
                     //  $date_donation_begin="2014-07-26";
                      $date_donation_begin=$this->uri->segment(3);
                      $date_donation_end="2016-07-26";
                    //   $date_donation_end=$this->uri->segment(4);
                      $query=$this->db->query("  select  sum(amount)  as  couse  from  $tb  where   date_donation   between  '$date_donation_begin'  and  '$date_donation_end'  ;      "); 
                       foreach($query->result() as $row )
                       {
                          // $rows[]=$row;
                           echo $row->couse;
                       }
                      // echo json_encode($rows);
            
        }
        
        public function  uploadfile1()
        {
               //http://10.87.196.113/donate/index.php/welcome/uploadfile1 
                 $file1name = $_FILES['file_upload1']['name'];
                $file1tmp  =$_FILES['file_upload1']["tmp_name"]; // tmp folder
               $file1Type= $_FILES['file_upload1']["type"]; //type of file
               $file1Size= $_FILES['file_upload1']["size"]; //size
               $file1ErrorMsg = $_FILES['file_upload1']["error"]; // 0=false 1=true

                /*
                     $fp = fopen($_FILES["file1"]["tmp_name"],"r");  
    $ReadBinary = fread($fp,filesize($_FILES["file1"]["tmp_name"]));
    $FileData = addslashes($ReadBinary);
                 */

                 $cp1=copy($file1tmp ,  "uploadfile/". $file1name );
                if( $cp1 )
                {
                    echo "success";
                }
                else
                {
                     echo "false";
                }

        }
        
        public function   tree_fileupload()
        {
             //http://10.87.196.113/donate/index.php/welcome/tree_fileupload 
            /*
                    $result=array();
                    $node=array();
                    
                    $node['file1']='text1.txt';
                    $node['file2']='text2.txt';
                    array_push($result,$node);
                    echo json_encode($result);
             * 
             */
            
            $path="uploadfile/";
            $d=dir($path);
            
            $rows=array();
            $node=array();
            while( false !==  ($entry=$d->read()))
            {
                if( !file_exists($entry))
                {
                    //echo $entry;
                   // echo "<br>";
                    $node['name']=$entry;
                    array_push($rows,$node);
                }
                
            }
            echo json_encode($rows);
            //$d->close();

        }
        
        public  function  del_dir()
        {
              //http://10.87.196.113/donate/index.php/welcome/del_dir
            
            /*
             $path="uploadfile/";
             $file="hulk1.jpg";
              unlink($path.$file);
            */
            
            $name=$this->input->get_post("name");
           if( strlen($name) > 0 )
           {
               $path="uploadfile/";
               $del=unlink($path.$name);
               if( $del )
               {
                   echo "true";
               }else
               {
                   echo "false";
               }
           }
           
        }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */