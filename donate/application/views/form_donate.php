<script type="text/javascript">
    function submit_donate()
    {
                $('#donate_submit').form('submit',{ 
                        success:function(data)
                        {  
                             //alert(data);   
                              $.messager.alert('สถานะการบันทึกข้อมูล',data,'info');
                              $('#dg_donation').panel('open');
                               $('#tb_donation').datagrid('load','<?=base_url()?>index.php/welcome/tb_donation/'  );
                        }
                 });
     }    
</script>


<!--  เพิ่มผู้บริจาค  -->
<div style="padding: 300px 100"></div>
    
   <div  style="padding: 10px 10px" ></div>
   
    <div class="easyui-dialog"  id="dia_donate" style="width:600px;height: 500px;"  title=" เพิ่มข้อมูลผู้บริจาค"  data-options=" 
        iconCls:'icon-man',
        modal:true,
        closed:true,
        
      "  >
   
  
     <form id="donate_submit"   action="<?=base_url()?>index.php/welcome/insert_donate" method="post" enctype="multipart/form-data"   >
         
         <div style="margin: 10px 50px">
             ค้นหาชื่อผู้ที่เคยบริจาค :
             
             
                 <input class="easyui-combobox"  style="width: 200px;height: 40px;"    data-options="
                                                url:'<?=base_url()?>index.php/welcome/autocomp_donate'  ,
                                                method:'post',    
                                                valueField:'id_donation',
                                                textField:'name_donation',
                                                panelHeight:'auto',
                                                onSelect:function(data)
                                                   { 
                                                        var   name=data.name_donation; 
                                                        var   lastname=data.lastname_donation;
                                                         //alert( name  +  '  '  +   lastname  ); 
                                                          $('#name_donation').textbox('setValue',name);
                                                          $('#lastname_donation').textbox('setValue',lastname);
                                                    }
                                            "
                                            />
               
         </div>
         
         <div style="margin:10px 50px  ">
             
        
             
             
             <input class="easyui-textbox" id="name_donation"  name="name_donation" style="width:200px;height: 40px"  data-options=" 
                prompt:'ชื่อผู้บริจาค',
                iconCls:'icon-man',
                iconAlign:'left',
                
                "     />
             
             
              <input class="easyui-textbox" id="lastname_donation"  name="lastname_donation"  style="width:200px;height: 40px"  data-options=" 
                prompt:'นามสกุลบริจาค',
                iconCls:'icon-man',
                iconAlign:'left',
                
                "     />
             
             
         </div>

         <div style="margin:10px  50px  ">
             วัน-เดือน-ปี ที่บริจาค :
             <input class="easyui-datebox" id="date_donation"  name="date_donation" style="width:200px;height: 40px"  data-options=" 
                "     />
         </div>
     
              <div style="margin:10px   50px  ">
             ประเภทของผู้บริจาค :
             <input class="easyui-combobox" id="tax"  name="tax"  style="width:200px;height: 40px"  data-options=" 
                         valueField:'label',
                          textField:'value',
                          data:[    
                          {  label:'แบบธรรมดา',value:'แบบธรรมดา'  },
                          {  label:'แบบลดหย่อนภาษี'  ,value:'แบบลดหย่อนภาษี'  },
                          ],
                    "     />
         </div>
     
         <div style="margin:10px   50px  ">
             เล่มที่ :
             <input class="easyui-numberbox" id="num1" name="num1"  style="width:100px;height: 40px"  data-options=" 
                          min:0,
                          precision:0,
                          max:100,
                         required:false,
                    "     />
             
              เลขที่ :
              <input class="easyui-numberbox" id="num2"  name="num2" style="width:100px;height: 40px"  data-options=" 
                          min:0,
                          precision:0,
                          max:100,
                         required:false,
                    "     />
             
              จำนวนเงินบริจาค :
              <input class="easyui-numberbox" id="amount" name="amount"    style="width:100px;height: 40px"  data-options=" 
                         
                         iconCls:'icon-cut',
                          min:0,
                          precision:2,
                          max:1000000,
                         required:false,
                         
                    "     />
             
             
         </div>
     
     


          <div style="margin:10px   50px  ">
                ที่อยู่ผู้บริจาค :
                <input class="easyui-textbox" id="address" name="address"  style="width:270px;height: 70px"  
                       data-options=" 
                         prompt:'ที่อยู่ผู้บริจาค',
                         multiline:true,
                         
                    "     />
         </div>
         
      <div style="margin:10px  140  0px  ">
          <a   href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 50"  onclick="submit_donate()"  id=" btn_donate "  data-options=" iconCls:'icon-man' , plain:false ,  "  >บันทึก</a>
          <a   href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 50"  onclick=" $('#dia_donate').dialog('close') "  data-options=" iconCls:'icon-cancel' , plain:false "  >Close</a>
      </div>
         
    </form> 
    
     
 </div>
  <!--  เพิ่มผู้บริจาค  -->
