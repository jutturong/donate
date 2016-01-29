 <!--  เพิ่มผู้ใช้งานในระบบ -->
 <div class="easyui-panel"  
      id="p_user"
      title="Administrator (เพิ่มผู้ใช้งานในระบบ)"
      style="padding: 10px 10; width: 750px;height: 150px"
      data-options="
      iconCls:'icon-man' ,
       tools : tool_user ,
      closed:true ,
      closable:true,
      
      " 
      >
    
     <table class="easyui-datagrid"  
            id="tb_user"
            data-options="
            url:'<?=base_url()?>index.php/welcome/tb_user',
            fitColumns:true,
            singleSelect:true,
            columns:[[
               { field:'Id_user',title:'ID'  },
               { field:'username',title:'User'  },
               { field:'password',title:'Password' },
               {  field:'status',title:'status' },
               {  field:'Name_user',title:'Name_user'  },
               {  field:'Department_user',title:'Department_user' },
               {  field:'Department_phone',title:'Department_phone' },
               {  field:'Email_user', title:'Email_user' },
            ]],
           
            "
            >
     </table>
     <div id="tool_user" >
         <a  href="javascript:void(0)"  class="icon-reload"  data-options=" iconAlign:'top'  "  onclick=" $('#tb_user').datagrid('reload');  " ></a>
         
     </div>
      
     
 </div>
    <!--  เพิ่มผู้ใช้งานในระบบ --> 