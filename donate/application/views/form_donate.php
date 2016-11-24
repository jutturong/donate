<script type="text/javascript">
    function submit_donate()
    {
                $('#donate_submit').form('submit',{ 
                        success:function(data)
                        {  
                             //alert(data);   
                              $.messager.alert('สถานะการบันทึกข้อมูล',data,'info');
                              $('#sub_search').combobox('reload');
                              $('#dg_donation').panel('open');
                              $('#tb_donation').datagrid('load','<?=base_url()?>index.php/welcome/tb_donation/'  );
                              
                              //tb_donation
                        }
                 });
     }  
     
     function  clear_fr()
     {
           //alert('t');    
          $('#name_donation').textbox("clear");
          $('#lastname_donation').textbox("clear");
         $('#amount').textbox("setValue","");
          $('#address').textbox("setValue","");
          $('#sub_search').combobox('reload');
      }
     
</script>


<!--  เพิ่มผู้บริจาค  -->
<div style="padding: 300px 100px;"></div>
    
   <div  style="padding: 10px 10px" ></div>
   
    <div class="easyui-dialog"  id="dia_donate" style="width:700px;height: 700px;left:200px;top:10px;"  title=" เพิ่มข้อมูลผู้บริจาค"  data-options=" 
        iconCls:'icon-man',
        modal:false,
        closed:true,
        
      "  >
   
  
     <form id="donate_submit"  accept-charset="utf-8"   action="<?=base_url()?>index.php/welcome/insert_donate" method="post" enctype="multipart/form-data"   >
         
         <div style="margin: 10px 50px">
             ค้นหาชื่อผู้ที่เคยบริจาค :
             
             
                 <input class="easyui-combobox" id="sub_search"  style="width: 200px;height: 40px;"    data-options="
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
             
        
             
             
             <input class="easyui-textbox" id="name_donation"  required="true"  name="name_donation" style="width:200px;height: 40px"  data-options=" 
                prompt:'ชื่อผู้บริจาค',
                iconCls:'icon-man',
                iconAlign:'left',
                
                "     />
             
             
              <input class="easyui-textbox" id="lastname_donation"   name="lastname_donation"  style="width:200px;height: 40px"  data-options=" 
                prompt:'นามสกุลบริจาค',
                iconCls:'icon-man',
                iconAlign:'left',
                
                "     />
             
             
         </div>

         <div style="margin:10px  50px  ">
             วัน-เดือน-ปี ที่บริจาค :
             <input class="easyui-datebox" id="date_donation"     name="date_donation" style="width:200px;height: 40px"  data-options=" 
                "     />
         </div>
     
              <div style="margin:10px   50px  ">
             ประเภทของผู้บริจาค :
             <input class="easyui-combobox" id="tax"  name="tax"  required="true"  style="width:200px;height: 40px"  data-options=" 
                         valueField:'label',
                          textField:'value',
                          data:[    
                          {  label:'แบบธรรมดา',value:'แบบธรรมดา'  },
                          {  label:'แบบลดหย่อนภาษี'  ,value:'แบบลดหย่อนภาษี'  },
                          ],
                    "     />
         </div>
     
         <div style="margin:10px   50px  ">
             
             <!--
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
              -->
              
             
              จำนวนเงินบริจาค :
              <input class="easyui-numberbox" id="amount" name="amount"   required="true"   style="width:100px;height: 40px"  data-options=" 
                         
                         iconCls:'icon-cut',
                          min:0,
                          precision:2,
                          max:1000000,
                         required:false,
                         
                    "     />
             
             
         </div>
     
       <div style="margin:10px   50px  ">
           <label>
               โทรศัพท์/Phone : <input class="easyui-numberbox"   id="tel"  name="tel" style="width: 130px;height: 40px;"  />
           </label>
           <label>
               วันเกิด / Date of birth : <input class="easyui-datebox"  id="birthdmy"  name="birthdmy"   style="width:200px;height: 40px;"  />
           </label>
       </div>

         <div style="margin:10px   50px  ">
             <label>
                 Email address : <input class="easyui-textbox"  id="email"   name="email"   style="width:300px;height: 40px;"  />
             </label>
         </div>
         
          <div style="margin:10px   50px  ">
              <label>
                  ประสงค์บริจาค/Donation : <input class="easyui-combobox"  id="id_type_donate"  name="id_type_donate"   style="width:200px;height: 40px;"  
                                                  data-options="
                                                  valueField:'value',
                                                  textField:'label',
                                                    data:[
                                                       {
                                                         label:'เงินสด/Cash',
                                                         value:1
                                                         },
                                                         {
                                                            label:'เช็ค/Cheque',
                                                            value:2
                                                         },
                                                         {
                                                            label:'โอน/Transfer',
                                                            value:3
                                                         }
                                                    ]
                                                  "
                                                  />
              </label>
          </div>

          <div style="margin:10px   50px  ">
                ที่อยู่ผู้บริจาค :
                <input class="easyui-textbox" id="address" name="address"  style="width:270px;height: 70px"  
                       data-options=" 
                         prompt:'ที่อยู่ผู้บริจาค',
                         multiline:true,
                         
                    "     />
         </div>
         
         <div style="margin:10px   50px  ">
             Upload File :
             <input class="easyui-filebox"  id="file1"  name="file1"  prompt=" เลือกไฟล์ " style="width:270px;height: 40px"    />
         </div>
         
      <div style="margin:10px  100px  ">
       
          <a   href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 50px"  onclick="submit_donate()"  id=" btn_donate "  data-options=" iconCls:'icon-man' , plain:false ,  "  >บันทึก</a>
          <a   href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 50px"  onclick=" $('#dia_donate').dialog('close') "  data-options=" iconCls:'icon-cancel' , plain:false "  >Close</a>
          <a href="javascript:void(0)"   class="easyui-linkbutton"  style="width: 100px;height: 50px"   onclick="  clear_fr()  "    data-options="  iconCls:'icon-back'  "  >Clear</a>
          
      </div>
         
    </form> 
    
     
 </div>
  <!--  เพิ่มผู้บริจาค  -->
