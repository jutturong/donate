<script type="text/javascript">
     function  reload_danation()
     {
        //$.messager.alert('t');
        $.messager.alert("สถานะการจัดเรียงข้อมูล"," เรียงข้อมูลตาม วัน-เดือน-ปี ล่าสุด ","Info");
         $('#tb_donation').datagrid('load','<?=base_url()?>index.php/welcome/tb_donation');
     }
     
     function update_donate()
     {
           //alert('t');
           $('#fr_update_donate').form({
               url:"<?=base_url()?>index.php/welcome/edit_donate",
               onSubmit:function(data)
               {
                   //alert(data);
               },
               success:function(data)
               {
                   //alert(data);
                         if(  data ==  "success"  )
                         {
                               $.messager.alert("สถานะการแก้ไขข้อมูล","แก้ไขข้อมูลสำเร็จ","Info");
                               $('#tb_donation').datagrid('reload');
                               $("#edit_donate").dialog('close');
                         }
                         else
                         {
                                $.messager.alert("สถานะการแก้ไขข้อมูล","แก้ไขข้อมูลล้มเหลว","Error");
                         }
                }
           });
    }
    
     function delete_donate()
     {
                              var  row=$('#tb_donation').datagrid('getSelected');
                            //  var  url = "<?=base_url()?>index.php/welcome/del_donation/";  //id_donation
                               if( row )
                               {
                                        $.messager.confirm('Confirm',' คุณต้องการลบข้อมูลหรือไม่ ',function(r)
                                           {
                                               if( r )
                                                {
                                                     $.post("<?=base_url()?>index.php/welcome/del_donation/" + row.id_donation   ,function(index,r)
                                                         {   
                                                             // alert('t'); 
                                                                    //alert(index + "   /   " + r );
                                                                    if( r == "success" )
                                                                    {
                                                                                $.messager.alert("Status"," ลบข้อมูลแล้ว ","Info"); 
                                                                                $('#tb_donation').datagrid('reload');
                                                                     }
                                                                    else
                                                                    {
                                                                             $.messager.alert("Status"," ไม่สามารถลบข้อมูลได้ ","Error");       
                                                                     }
                                                                     
                                                         });
                                                         
                                                }
                                           },'json');
                               }
     }
    
    
    function  edit_danate()
    {
          var  row=$('#tb_donation').datagrid('getSelected');
          if( row )
          {
              $('#edit_donate').dialog('open');  
              var  id_db=row.id_donation;
              var  num1_db=row.num1;  
              var  num2_db=row.num2;
              var  name_donation_db=row.name_donation;
              var  lastname_donation_db=row.lastname_donation;
              var   date_donation_db=row.date_donation;
              var  tax_db=row.tax;
              var  amount_db=row.amount;
              var  address_db=row.address;
              
             //  alert(num1_db);
               
            /*
               $.post("http://10.87.196.113/donate/index.php/welcome/fetch_donate/"   + id_dg   , function(r)
               {     
                    alert(id_dg);
                }   ,'json');
              */
             
               $('#id_donation').numberbox('setValue',row.id_donation);
               $('#edit_num1').textbox('setValue',num1_db);
               $('#edit_num2').textbox('setValue',num2_db);
               $('#edit_num2').textbox('setValue',num2_db);
               $('#edit_name_donation').textbox('setValue', name_donation_db);
               $('#edit_lastname_donation').textbox('setValue', lastname_donation_db );
               
                $('#edit_ate_donation').textbox('setValaue',date_donation_db);
               
               $('#edit_tax').textbox('setValue', tax_db );
                $('#edit_amount').textbox('setValue', amount_db );
                 $('#edit_address').textbox('setValue', address_db );
               
               //edit_lastname_donation
               
               
          }
    }
     
</script>




<div style="margin:20px 0 10px 0;"></div>

    <div class="easyui-panel"  id="dg_donation" title="รายนามทั้งหมดของผู้บริจาค" style="width:850px;height:520px;padding:10px;"
            data-options="iconCls:'icon-man',
            closable:true,  
            closed:true, 
            tools:'#tool_donate'
            ">


           
       
        
        <div style="margin:20px 0 10px 0;"></div>
        <table class="easyui-datagrid" id="tb_donation"  data-options=" 
               url:'<?=base_url()?>index.php/welcome/tb_donation',
               columnfits:true,
               autoRowHeight:true,
               rownumbers:true,
               singleSelect:true,
               pagination:false,
               panelHeight:'auto',
               fitColumns:true,
               onSelect:function()
               {
                  // $.messager.alert('t');
                      
               },
               rowStyler:function(index,row)
               { 
                   var  ck= row.id_donation % 2
                  // if( row.id_donation > 5 )
                  /*
                    if( ck == 0 )
                   { return 'background-color:#6293BB;color:#fff;'; } 
                   */
               },
               columns:[[      
                 //  {  field:'id_donation',title:'ID'  },
               //    { field:'num1' ,title:' เล่มที่ ' }, 
               //    { field:'num2' ,title:' เลขที่ ' }, 
                   {  field: 'name_donation'   ,title:'ชื่อ' , sortable:true , align:'left'   },
                   {  field:'lastname_donation', title:' นามสกุล ' ,  align:'left'  },
                   {  field:'amount' ,title:' จำนวนบริจาค ' },
                   {  field:'date_donation', title:' ปี/เดือน/วัน ที่บริจาค ' },
              //     {  field:'tax', title:' รูปแบบการบริจาค ' },
                   { field:'address' ,title:' ที่อยู่ผู้บริจาค ' },
                   {  field:'filename' ,title:'ชื่อไฟล์แนบ'  },
               
               ]]
               ">
            
        </table>
        <div class="easyui-pagination"  style="background:#efefef;border:1px solid #ccc;"   data-options=
             " 
             total : <?=$maxpage?>,
             pageSize:10,
             pageList:[ 15,20,50,100 ],
             plain:true,
             onSelectPage:function(pageNumber, pageList)
             {
                // alert('t');
                  //page_danation
                  $('#tb_donation').datagrid('load','<?=base_url()?>index.php/welcome/page_danation/' + pageNumber  +'/' +  pageList   );
             }
             " 
             ></div>
     
    </div>


<div id="tool_donate" >
    <a href="javascript:void(0)"  class="icon-large-clipart"   onclick=" 
       // alert('t');  
               var  row=$('#tb_donation').datagrid('getSelected');
              if( row )
              {
                   var  id_donation=row.id_donation;
                   // alert( id_donation );
                   var   url='<?=base_url()?>report_pdf/donate/report_case2.php?id=' +   id_donation  ;
                   // alert( url );
                    window.open(url);
              }
       "   ></a>
    <a href="javascript:void(0)"  class="icon-back"  onclick=" 
       // alert('t');   
              var  row=$('#tb_donation').datagrid('getSelected');
              if( row )
              {
                    var  id_donation=row.id_donation;
                   var   url='<?=base_url()?>index.php/welcome/del_file/'  +  id_donation;
                       $.messager.confirm(' คุณต้องการลบไฟล์ทีแนบมา  ','คุณแน่ใจว่าต้องการลบไฟล์ที่แนบมาหรือไม่',function(r)
                       { 
                            if( r )
                                {
                                                 $.post(url,function(data)
                                                    {
                                                          //  alert(data);
                                                              if( data == '1'  )
                                                              {
                                                                     $.messager.alert('สถานะการลบไฟล์ข้อมูล','ลบไฟล์ข้อมูลสำเร็จ','Info');
                                                                     $('#tb_donation').datagrid('reload');
                                                               }
                                                               else if( data == '0'  )
                                                               {
                                                                      $.messager.alert('สถานะการลบไฟล์ข้อมูล','ลบไฟล์ข้อมูลล้มเหลว','Err');
                                                                      $('#tb_donation').datagrid('reload');
                                                               }
                                                    });
                                }
                        });
              }
       "  ></a>

    <a href="javascript:void(0)" class="icon-man"  onclick=" 
        //alert('t'); 
                $.messager.alert('สถานะการจัดลำดับข้อมูล',' เรียงลำดับข้อมูลตาม ลำดับการบันทึก ','Info');
                $('#tb_donation').datagrid({
                    url:'<?=base_url()?>index.php/welcome/tb_donation_desc_id',
                    columnfits:true,
                    autoRowHeight:true,
                    rownumbers:true,
                    singleSelect:true,
                    pagination:false,
                    panelHeight:'auto',
                    fitColumns:true,
                    columns:[[      
                 //  {  field:'id_donation',title:'ID'  },
               //    { field:'num1' ,title:' เล่มที่ ' }, 
               //    { field:'num2' ,title:' เลขที่ ' }, 
                   {  field: 'name_donation'   ,title:'ชื่อ' , sortable:true , align:'left'   },
                   {  field:'lastname_donation', title:' นามสกุล ' ,  align:'left'  },
                   {  field:'amount' ,title:' จำนวนบริจาค ' },
                   {  field:'date_donation', title:' ปี/เดือน/วัน ที่บริจาค ' },
              //     {  field:'tax', title:' รูปแบบการบริจาค ' },
                   { field:'address' ,title:' ที่อยู่ผู้บริจาค ' },
                   {  field:'filename' ,title:'ชื่อไฟล์แนบ'  },
                            ]],
           
                });
            " ></a>
    <a href="javascript:void(0)" class="icon-print"  data-options="iconAlign:'top' "  onclick="
     var  row=   $('#tb_donation').datagrid('getSelected');
            if( row )
            {
                // alert( row.filename );    
                 window.open('<?=base_url()?>uploadfile/' + row.filename );
            }
       "></a>  
    
    <a href="javascript:void(0)" class="icon-search"  data-options="iconAlign:'top' "  onclick="$('#win_search').window('open');"></a>  
    <a href="javascript:void(0)" class="icon-reload"  data-options="iconAlign:'top' "  onclick="reload_danation()"></a>
    <a href="javascript:void(0)" class="icon-add"  data-options="iconAlign:'top' "  onclick="$('#dia_donate').dialog('open')"></a>
    <a href="javascript:void(0)" class="icon-edit"  data-options="  iconAlign:'top'  "  onclick=" edit_danate()  "  ></a>
    <a href="javascript:void(0)"  class="icon-cancel"   onclick="delete_donate()"></a>
    <a href="javascript:void(0)"  class="icon-help"  onclick="  "  ></a>
      <!--
        <a href="javascript:void(0)" class="icon-add" onclick="javascript:alert('add')"></a>
        <a href="javascript:void(0)" class="icon-edit" onclick="javascript:alert('edit')"></a>
        <a href="javascript:void(0)" class="icon-cut" onclick="javascript:alert('cut')"></a>
        <a href="javascript:void(0)" class="icon-help" onclick="javascript:alert('help')"></a>
      -->
    </div>




<!-- แก้ไข donate -->
<div id="edit_donate"
     class="easyui-dialog"
     title=" แก้ไขข้อมูลรายนามผู้บริจาค "
     style="width:500px;height: 500px;padding: 10px 10;left:10px;top: 10px;"
     data-options=" 
     closed:true,
     iconCls:'icon-man',
     modal:true,
     
     /*
     toolbar:[
        {   iconCls:'icon-edit',     }
     ],
    
     */
     
     "
     >
    
    <form id="fr_update_donate"   method="post"  enctype="multipart/form-data" >
        
      <!--  <div style="padding : 30px 10  10px 5">-->
      <div  style="padding: 10px;">
            <label>
                   <input class="easyui-numberbox"  readonly="true" required="true"   style="width:100px;height: 30px;padding: 10px;"   id="id_donation"  name="id_donation"  />
            </label>
          
        </div>     
        
    <div style="padding : 10px 10  10px 5">

        <label      >
            เล่มที่ :  <input class="easyui-numberbox"  id="edit_num1"  name="edit_num1" style="width: 70px;height: 40px;"      />
        </label>
          
         
           <label     >
               เลขที่ :   <input class="easyui-numberbox"  id="edit_num2"  name="edit_num2" style="width: 70px;height: 40px;"      />
           </label>
           
    </div>
       
            <div style="padding : 5px 5 ">
                <label     >
                    ชื่อ :  <input class="easyui-numberbox"  id="edit_name_donation"  name="edit_name_donation" style="width: 300px;height: 40px;padding: 12px"      />      
                </label>  
           
           
           <div style="padding : 5px 10">
               <label    >
                   นามสกุล :  <input class="easyui-numberbox"  id="edit_lastname_donation" name="edit_lastname_donation"  style="width: 300px;height: 40px;"      /> 
               </label>
              
              
               
           </div>
           
           <div style="padding : 5px 10">
               <label     >
                    วัน-เดือน-ปี :
              
                    <input class="easyui-datebox"  id="edit_date_donation" name="edit_date_donation"  style="width: 120px;height: 40px;"  
                       data-options=" 
                        
                       
                       "
                       />
                
                 </label>
               
           </div>
           
           
           
           
          <div style="padding : 5px 10">
               <label     >
                    แบบชำระ :
              
                    <input class="easyui-numberbox"  id="edit_tax"  name="edit_tax"  style="width: 300px;height: 40px;"      /> 
                 </label>
           </div>
           
            <div style="padding : 5px 10">
               <label      >
                   จำนวนเงิน :
             
                   <input class="easyui-numberbox"  id="edit_amount" name="edit_amount" style="width: 300px;height: 40px;"      /> 
                  </label>
           </div>
           
           
           
              <div style="padding : 5px 10">
               <label      >
                   ที่อยู่ :
               
                   <input class="easyui-textbox"  id="edit_address"  name="edit_address"  style="width: 300px;height: 40px;"      /> 
                </label>
           </div>
           
           <div style="padding : 5px 10">
               <?=nbs(40)?>
               <input   type="submit"    onclick=" update_donate()  "     />

               
               <!--
               <a href="javascript:void(0)"   style="height: 40px"  class="easyui-linkbutton"  data-options=" iconCls:'icon-cancel'    "    onclick=" $('#edit_donate').dialog('close');   " >Cancel</a>
                -->
                
               </div>
           
    </div>
    
        </form> 
    
</div>
<!-- แก้ไข donate -->
    

