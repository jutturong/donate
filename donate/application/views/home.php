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

<!--  Expand  file -->
<div class="easyui-panel"   id="p_upload"  title="  Expand file  ทั้งหมดในการ upload file  "   data-options="  
     closed:true,
     iconCls:'icon-edit'
     "   style="width:500px;height: 400px;padding: 10px;left:10px;top: 10px"  >
    
    <table id="dg_upload"  class="easyui-datagrid" data-options="
           url:'<?=base_url()?>index.php/welcome/tree_fileupload',
           fitColumns:true,
           rownumbers:true,
           singleSelect:true,
           columns:[[
           {  field:'name',title:' File upload ',   }
           ]],
          toolbar:[   
          {   text:'Download file'  , iconCls:'icon-save' ,handler:function()
                      {   
                         var   row=$('#dg_upload').datagrid('getSelected');
                         if( row )
                         {
                               var  name_dw=row.name;
                               //alert(name_dw);
                               window.open('<?=base_url()?>uploadfile/' + name_dw   );
                         }
                      }  
          },
          {
              text:'Upload File',iconCls:'icon-edit' ,handler:function()
                   {  
                       // alert('test');
                       $('#dia_upload').dialog('open');
                   }
          }
          ]
           " >
        
    </table>
    
    
</div>
<!--  Expand  file -->

<?=$this->load->view("donation")?>
    
    


  <!--  เพิ่มผู้ใช้งานในระบบ -->
 <?=$this->load->view("admin")?>
  <!--  เพิ่มผู้ใช้งานในระบบ -->
  
  

 
 <!--  เพิ่มผู้บริจาค  -->
 <?=$this->load->view("form_donate")?>
 <!--  เพิ่มผู้บริจาค  -->
 
 <!--  upload file -->
 <?=$this->load->view("upload")?>
 <!--  upload file -->


    
    
</body>

</html>