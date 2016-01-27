


<div style="margin:20px 0 10px 0;"></div>

    <div class="easyui-panel"  id="dg_donation" title="รายนามทั้งหมดของผู้บริจาค" style="width:800px;height:520px;padding:10px;"
            data-options="iconCls:'icon-man',
            closable:true,  
            closed:true, 
            tools:'#tt'
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
               onSelect:function()
               {
                   $.messager.alert('t');
               },
               rowStyler:function(index,row)
               { 
                   var  ck= row.id_donation % 2
                  // if( row.id_donation > 5 )
                    if( ck == 0 )
                   { return 'background-color:#6293BB;color:#fff;'; } 
               },
               columns:[[      
                 //  {  field:'id_donation',title:'ID'  },
                   {  field:'name_donation'   ,title:'ชื่อ-นามสกุล' },
                   {  field:'lastname_donation', title:' นามสกุล ' },
                   {  field:'date_donation', title:' วัน-เดือน-ปี ที่บริจาค ' },
                   {  field:'tax', title:' รูปแบบการบริจาค ' },
                   {  field:'amount' ,title:' จำนวนบริจาค ' },
                   { field:'address' ,title:' ที่อยู่ผู้บริจาค ' },                  
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


<div id="tt" >
        
        <a href="javascript:void(0)" class="icon-add" onclick="javascript:alert('add')"></a>
        <a href="javascript:void(0)" class="icon-edit" onclick="javascript:alert('edit')"></a>
        <a href="javascript:void(0)" class="icon-cut" onclick="javascript:alert('cut')"></a>
        <a href="javascript:void(0)" class="icon-help" onclick="javascript:alert('help')"></a>
    </div>





    

