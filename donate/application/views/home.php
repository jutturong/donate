<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?=base_url()?>favicon2.ico" type="image/x-icon" />
    <title><?=$title?></title>
    <?=$this->load->view("import_")?>

    
    <script type="text/javascript"  >
        
         function  loadhbd()
         {
                var  url="<?=base_url()?>index.php/welcome/hbd";
                $.getJSON(url,function(data)
                     {
                         
                         
                           $.each(data,function(v,k)
                               {
                                        var   	name_donation=k.name_donation;
                                        var    lastname_donation=k.lastname_donation;
                                        var    id_donation=k.id_donation;
                                        var    email=k.email;
                                        
                                        
                            //-----------------------------------------------------------------     
                              if(   name_donation.length > 0  &&  lastname_donation.length > 0  )
                              {    
                                    //$('#name_donation_hbd').textbox('setValue', name_donation );
                                      //alert(  	name_donation  );
                                      
                                      /*
                                       $.messager.confirm(" Happy Birth Day "," ส่ง E-Card อวยพรวันเกิดกด  ok " ,  function(r)
                                           {    
                                                      if( r )
                                                            {
                                                                       alert(  email  );   
                                                             }
                                                     
                                            }  );
                                         */
                                        
                                        $.messager.alert("Happy Birth Date ","  วันนี้มีวันเกิดของ   "   +   name_donation  +  "   "  +    lastname_donation   +  "  ระบบได้ทำการส่ง E-card แบบอัตโนมัติแล้ว  "  ,"Info");
                                            
                                }      
                              //------------------------------------------------------------------------
                                          
                                });
                                
                      }
                );
         }
    </script>   
    
</head>



<body  onload=" loadhbd() ">


   

    
<!-- ระบบการค้นหา -->
<?=$this->load->view("search")?>
<!-- ระบบการค้นหา -->
 
 
<?=$this->load->view("menu")?>  

<!--  Expand  file -->
<div class="easyui-panel"   id="p_upload"  title="  Expand file  ทั้งหมดในการ upload file  "   data-options="  
     closed:true,
     iconCls:'icon-edit'
     "   style="width:500px;height: 400px;padding: 10px;left:10px;top: 10px"  >
    
    <table id="dg_upload"  class="easyui-datalist" data-options="
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
              text:'Upload File',iconCls:'icon-add' ,handler:function()
                   {  
                       // alert('test');
                       $('#dia_upload').dialog('open');
                   }
          },
          {
             text:'Reload',iconCls:'icon-reload',handler:function()
             {
                   $('#dg_upload').datagrid('reload');
             }
          },
          {
             text:'Delete',iconCls:'icon-cancel',handler:function()
             {
                    var   row=$('#dg_upload').datagrid('getSelected');
                    if( row )
                    {
                         var  name_dir=row.name;
                         $.post('<?=base_url()?>index.php/welcome/del_dir/',{  name:name_dir  },function(data)
                         { 
                             //alert(data);  
                             if( data=='true' )
                             {
                                    $('#dg_upload').datagrid('reload');
                                    $.messager.alert('สถานะการลบข้อมูล','ลบข้อมูลแล้ว','Info');
                             }
                             else
                             {
                                   $.messager.alert('สถานะการลบข้อมูล','ไม่สามารถลบข้อมูลได้','Error');
                             }
                         });
                    }
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