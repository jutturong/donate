<script type="text/javascript">

    function mainmenu1() //ตารางหลัก donation
    {
        //$.messager.alert('test');
          $('#p_user').panel('close'); 
          $('#dg_donation').panel('open');
   }

function sigout()
{
       window.location="<?=base_url()?>index.php/";
 }

</script>   


<div style="margin:0px 0px;"></div>
    <div class="easyui-panel" style="padding:5px;">
        <!--
        <a href="javascript:void(0)" class="easyui-linkbutton"  onclick="    loadhbd()   " data-options="iconCls:'icon-large-chart' , plain:true  " > E-card อวยพรวันเกิด</a>
         -->
        <a href="javascript:void(0)" class="easyui-linkbutton"  onclick="mainmenu1()" data-options="iconCls:'icon-man' , plain:true  " >รายนามผู้บริจาค</a>
        <a href="javascript:void(0)"  class="easyui-linkbutton"   data-options=" iconCls:'icon-cut' ,  plain:true  "   onclick=" $('#win_search').window('open');  "  >ค้นหา</a>
        <a href="#" class="easyui-menubutton" data-options="menu:'#mm1',iconCls:'icon-edit'"> เพิ่มข้อมูล </a>
        <a href="#" class="easyui-menubutton" data-options="menu:'#mm2',iconCls:'icon-reload'">Administrator</a>
      <!-- <a href="#" class="easyui-menubutton" data-options="menu:'#mm3'">เกี่ยวกับการบริจาค</a> -->
      
      <a href="javascript:void(0)"  class="easyui-menubutton"   data-options="  menu:'#menu_upload'  ,  iconCls:'icon-save'  "    >Upload File</a>
      
        <a href="javascript:void(0)"  class="easyui-linkbutton"  data-options=" iconCls:'icon-cancel'  ,plain:true  "   onclick=" sigout() "   > Sign Out </a>
    </div>
    <div id="mm1" style="width:150px;">
        <!--
        <div data-options="iconCls:'icon-undo'">Undo</div>
        <div data-options="iconCls:'icon-redo'">Redo</div>
        <div class="menu-sep"></div>
        -->
        
       
        
        <div data-options=" iconCls:'icon-man'  "  onclick="$('#dia_donate').dialog('open')" >เพิ่มรายนามผู้บริจาค</div>
        <div class="menu-sep"></div>
        <div data-options=" iconCls:'icon-search'  "   onclick=" $('#win_search').dialog('open');  "  >ค้นหา</div>
        
        <!--
        <div>Copy</div>
        <div>Paste</div>
        <div class="menu-sep"></div>
        <div>
            <span>Toolbar</span>
            <div>
                <div>Address</div>
                <div>Link</div>
                <div>Navigation Toolbar</div>
                <div>Bookmark Toolbar</div>
                <div class="menu-sep"></div>
                <div>New Toolbar...</div>
            </div>
        </div>
        <div data-options="iconCls:'icon-remove'">Delete</div>
        <div>Select All</div>
        -->
        
    </div>
    <div id="mm2" style="width:100px;">
        <div data-options="iconCls:'icon-man'  "  onclick="  $('#dg_donation').panel('close');    $('#p_user').panel('open');  "  >เพิ่มผู้ใช้งาน</div>
     <!--   <div>Update</div>
        <div>About</div> -->
    </div>
    <div id="mm3" class="menu-content" style="background:#f0f0f0;padding:10px;text-align:left">
        <!--
        <img src="http://www.jeasyui.com/images/logo1.png" style="width:150px;height:50px">
        <p style="font-size:14px;color:#444;">Try jQuery EasyUI to build your modern, interactive, javascript applications.</p>
        -->
    </div>

<div id="menu_upload"   class="menu-content"   style="background:#f0f0f0;">
    <div data-options=" iconCls:'icon-add' "   class="easyui-menubutton"  onclick="  $('#dia_upload').dialog('open');  /*$('#pa_expand').panel('close');*/  "     >upload file</div>
    <div data-options=" iconCls:'icon-add'  "   class="easyui-menubutton"    onclick=" /*$('#dia_upload').dialog('close');*/   $('#p_upload').panel('open');    " >Expand File</div>
</div>



