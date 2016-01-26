 


<div style="margin:20px 0 10px 0;"></div>
    <div class="easyui-panel"  id="dg_donation" title="รายนามทั้งหมดของผู้บริจาค" style="width:800px;height:600px;padding:10px;"
            data-options="iconCls:'icon-man',
            closable:true,  
            closed:true, 
            tools:'#tt'
            ">
        <table class="easyui-datagrid"  data-options=" 
               url:'<?=base_url()?>index.php/welcome/tb_donation',
               columnfits:true,
               columns:[[  
                  
                   {  field:'id_donation',title:'ID'  },
                   {  field:'name_donation',title:'ชื่อ' },
                   {  field:'lastname_donation', title:' นามสกุล ' },
                   {  field:'date_donation', title:' วัน-เดือน-ปี ที่บริจาค ' },
                   
               ]]
               ">
            
        </table>
     
    </div>


    <div id="tt">
        <a href="javascript:void(0)" class="icon-add" onclick="javascript:alert('add')"></a>
        <a href="javascript:void(0)" class="icon-edit" onclick="javascript:alert('edit')"></a>
        <a href="javascript:void(0)" class="icon-cut" onclick="javascript:alert('cut')"></a>
        <a href="javascript:void(0)" class="icon-help" onclick="javascript:alert('help')"></a>
    </div>
