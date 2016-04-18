<?php
class  Authentication  extends CI_Model {
    var $title   = '';
    var $content = '';
    var $date    = '';
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }
    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();
        $this->db->insert('entries', $this);
    }
    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();
        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
    
    function  check_authentication($ck)
    {
         //echo "check_authentication  start";
        //$this->session->userdata('sess_status_login');  //check  authentication
       
         if(  $ck  !=  1   ) 
         {
                   redirect('welcome/');
         }
    }
    
    function  conv_date($dmy)// change  date format  y-m-d
    {
        if( strlen($dmy) > 0 )
        {
            //echo "T";
            $ex=explode("/",$dmy);
            return  $ex[2]."-".$ex[0]."-".$ex[1]; 
        }
    }
    
}
?>