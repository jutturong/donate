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
 <div class="easyui-dialog"  id="dia_donate" style="width:700px;height: 500px;padding:30px 60px"  title=" เพิ่มข้อมูลผู้บริจาค"  data-options=" 
        iconCls:'icon-man',
        closed:true,
        
      "  >
     
     <form id="donate_submit"   action="<?=base_url()?>index.php/welcome/insert_donate" method="post" enctype="multipart/form-data"   >
         <div style="margin:10px 0  10px  ">
             <input class="easyui-textbox" id="name_donation"  name="name_donation" style="width:200px;height: 40px"  data-options=" 
                prompt:'ชื่อผู้บริจาค',
                iconCls:'icon-man',
                iconAlign:'left',
                
                "     />
         </div>
     
            <div style="margin:10px 0  10px  ">
                <input class="easyui-textbox" id="lastname_donation"  name="lastname_donation"  style="width:200px;height: 40px"  data-options=" 
                prompt:'นามสกุลบริจาค',
                iconCls:'icon-man',
                iconAlign:'left',
                
                "     />
         </div>
         
         <div style="margin:10px 0  10px  ">
             วัน-เดือน-ปี ที่บริจาค :
             <input class="easyui-datebox" id="date_donation"  name="date_donation" style="width:200px;height: 40px"  data-options=" 
                "     />
         </div>
     
              <div style="margin:10px 0  10px  ">
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
     
         <div style="margin:10px 0  10px  ">
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
     
     


          <div style="margin:10px 0  10px  ">
                ที่อยู่ผู้บริจาค :
                <input class="easyui-textbox" id="address" name="address"  style="width:270px;height: 70px"  
                       data-options=" 
                         prompt:'ที่อยู่ผู้บริจาค',
                         multiline:true,
                         
                    "     />
         </div>
         
      <div style="margin:10px  140  0px  ">
          <a   href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 50"  onclick="submit_donate()"  id=" btn_donate "  data-options=" iconCls:'icon-man' , plain:true ,  "  >บันทึก</a>
          <a   href="javascript:void(0)"  class="easyui-linkbutton"  style="width: 100px;height: 50"  onclick=" $('#dia_donate').dialog('close') "  data-options=" iconCls:'icon-cancel' , plain:true "  >Close</a>
      </div>
         
    </form> 
     
     
 </div>
  <!--  เพิ่มผู้บริจาค  -->
