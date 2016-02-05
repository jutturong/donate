<!--  upload file -->




<script type="text/javascript">
      function  sub_file1()
      {
              
               $('#fr_upload').form({
                url:'<?=base_url()?>index.php/welcome/uploadfile1/',
                onSubmit:function(data)
                    {   
                         // alert(data);
                    },
                success:function(data)
                   {
                          if( data == "success"  )
                          {
                              var  v1=0;
                              for(v1=0;v1<=100;v1++)
                              {
                                  v1++;
                              }
                                $('#p').progressbar('setValue',   v1);
                                //setTimeout(arguments.callee, 200);
                                $.messager.alert("สถานะการ Upload file","การ upload file สมบูรณ์","Info"); 
                                //$('#p').progressbar('setValue',   0);
                                $('#p_upload').panel('open');
                                $('#dg_upload').datagrid('reload');
                           }
                          else if ( data=="false"   )
                          {
                                 $.messager.alert("สถานะการ Upload file","การ upload file ผิดพลาด","Error");   
                                 $('#p').progressbar('setValue',   0);
                            }   
                    }
            });
          
      }
</script>
<div class="easyui-dialog"  id="dia_upload"  title=" Upload File (รายนามผู้บริจาคประจำเดือน ) "  style="width:500px;height: 250px;padding: 10px;left:40px;top:50px;"  data-options="
         iconCls:'icon-save',
         modal:true,
         closed:true,
         buttons:[
         {  iconCls:'icon-cancel', text:'Close', handler:function(data){  $('#dia_upload').dialog('close');   }    }
         ]
     "  >
   
    <form id="fr_upload"  method="post"  accept-charset="UTF-8" enctype="multipart/form-data"  >
    <label  for="file_upload1" >
         Upload file1 :
         <input   id="file_upload1"    name="file_upload1"  class="easyui-filebox"  style="width:300px;height: 40px;padding:10px" data-options=" prompt:' เลือกไฟล์ที่ต้องการ upload  '
                                              
                                                  "   />
    </label>
    
    <div style="padding:10px  0  10px  0"> </div>
    <?=nbs(40)?> <input type="submit"  onclick="sub_file1()"  style="width:100px;height: 40px"   />
   
    </form>
    
<div id="p" class="easyui-progressbar" style="width:400px;"></div>

</div>
<!--  upload file -->




