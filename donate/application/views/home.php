<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?=base_url()?>favicon2.ico" type="image/x-icon" />
    <title><?=$title?></title>
    <?=$this->load->view("import_")?>

    
    
    
</head>



<body>
<?=$this->load->view("menu")?>  
<?=$this->load->view("donation")?>
    
 
    <!-- ค้นหา -->
    <div class="easyui-window"  id="win_search"
         data-options="  
         closed:true,
         iconCls:'icon-man',
         modal:true,
         
         "
         title=" ค้นหาชื่อรายนามผู้บริจาค "
         style=" width:350px;height: 300px"
         >
       
       <!--  <div style="margin:20px 0 10px 0;"></div> -->
       <table>
           <tr>
               <td>
                   ค้นหาจากรายชื่อ :
               </td>
               <td>
                 
                                    <input class="easyui-combobox"  style="width: 200px;height: 50px"  id="sr_name"  data-options="
                                                url:'<?=base_url()?>index.php/welcome/serch_donation',
                                                valueField:'id_donation',
                                                textField:'name_donation',
                                                onSelect:function()
                                                {
                                                     //alert('t');
                                                     //index.php/welcome/search_by_name
                                                     $('#dg_donation').panel('open');
                                                     $('#tb_donation').datagrid('load','<?=base_url()?>index.php/welcome/search_by_name/'  +  $('#sr_name').combobox('getValue')    );
                                                },
                                            "
                                            />
               </td>
           </tr>
           <tr>
               <td>
                   <?=nbs(3)?>
               </td>
           </tr>
           
           <tr>
               <td>
                      วัน-เดือน-ปี บริจาค : <input class="easyui-datebox"  style="width:100px;height: 30px" />
                      
               </td>
           </tr>
           
       </table>
       
        
     
        
    </div>
   <!-- ค้นหา -->
    
    
</body>

</html>