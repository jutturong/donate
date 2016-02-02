<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?=base_url()?>favicon2.ico" type="image/x-icon" />
    <title><?=$title?></title>
    <?=$this->load->view("import_")?>

    
    
    
</head>



<body>
    
    
<!-- ระบบการค้นหา -->
<?=$this->load->view("search")?>
<!-- ระบบการค้นหา -->
 
 
<?=$this->load->view("menu")?>  
<?=$this->load->view("donation")?>
    
    


  <!--  เพิ่มผู้ใช้งานในระบบ -->
 <?=$this->load->view("admin")?>
  <!--  เพิ่มผู้ใช้งานในระบบ -->
  
  

 
 <!--  เพิ่มผู้บริจาค  -->
 <?=$this->load->view("form_donate")?>
 <!--  เพิ่มผู้บริจาค  -->
 


    
    
</body>

</html>