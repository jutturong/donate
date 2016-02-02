<script type="text/javascript" >
    function  between_search()
    {
        
                               var   d1= $('#date_donation_begin').datebox('getValue');
                               var   sp1=d1.split('/');
                               var    d1succ=  sp1[2] + '-'  +  sp1[0]  + '-' +  sp1[1]  ;
                               var   d2= $('#date_donation_end').datebox('getValue');
                               var   sp2=d2.split('/');
                               var    d2succ=  sp2[2] + '-'  +  sp2[0]  + '-' +  sp2[1]  ;
                                var   comp= '<?=base_url()?>index.php/welcome/date_donate/'  +   d1succ  + '/'  +  d2succ; 
                                $('#dg_donation').panel('open');
                                $('#tb_donation').datagrid('load',  comp    );
                                
    }
</script> 

<!-- ค้นหา -->
    <div class="easyui-dialog"  id="win_search"
         data-options="  
         closed:true,
         iconCls:'icon-man',
         modal:true,
         buttons:[  
           {
               text:'Close',
               iconCls:'icon-cancel',
              
               handler:function()
               {  
                   $('#win_search').dialog('close');
               }
           }
         ]
         "
         title=" ค้นหาชื่อรายนามผู้บริจาค "
         style=" width:500px;height: 300px; padding: 10px 10;left:100;top:70"
         >
       
    
       <table>
           <tr>
               <td>
                   ค้นหาจากรายชื่อ :
               </td>
               <td>
                 
                   
                                    <input class="easyui-combobox"  style="width: 200px;height: 30px"  id="sr_name"  data-options="
                                                url:'<?=base_url()?>index.php/welcome/serch_donation/'  ,
                                                valueField:'id_donation',
                                                textField:'name_donation',
                                                onSelect:function()
                                                {                                             
                                                     $('#dg_donation').panel('open');
                                                     $('#tb_donation').datagrid('load','<?=base_url()?>index.php/welcome/search_by_name/'  +  $('#sr_name').combobox('getValue')    );
                                                },
                                            "
                                            />
                   
                    
                   
               </td>
           </tr>
           
           
           <tr>
               <td>
                      วัน-เดือน-ปี บริจาค : 
                      
               </td>
               <td>
                   <input class="easyui-datebox"  id="date_donation_begin" style="width:150px;height: 30px" data-options="                         
                         /*
                          formatter:function(date)
                          {
                          
                               var  y=date.getFullYear();
                               var  m=date.getMonth() + 1;
                               var  d=date.getDate();
                               return  y+'-'+m+'-'+d;
                               
                          },
                          */

                          onSelect:function(date)
                          {  
                              between_search();
                          },

                          " />
                   <input class="easyui-datebox"  id="date_donation_end" style="width: 150px;height: 30px" data-options="  
                         /*
                          formatter:function(date)
                          {
                               var  y=date.getFullYear();
                               var  m=date.getMonth() + 1;
                               var  d=date.getDate();
                               return  y+'-'+m+'-'+d;
                          },
                          */
                          
                          onSelect:function(date)
                          {
                               between_search();
                          }
                          " />
               </td>
           </tr>
           <tr>
               <td>
                   จำนวนเงินบริจาค :
               </td>
               <td>
                   <input class="easyui-numberbox"   style="width:100px;height: 50px"  id="amount"  data-options=" 
                          iconCls:'icon-cut',
                          min:0,
                          precision:2,
                          max:1000000,
                         required:false,
                         onChange:function(e)
                         { 
                               var    amount=$('#amount').numberbox('getValue');
                                 $('#dg_donation').panel('open');
                                 $('#tb_donation').datagrid('load','<?=base_url()?>index.php/welcome/amount_donate/'  +  amount    );
                         },
                          "   />
                   
                   <a href="javascript:void(0)"  style="width:50px;height: 40px;"  class="easyui-linkbutton"  
                      onclick="    
                                           var    amount=$('#amount').numberbox('getValue');
                                           //$.messager.alert(amount);
                                           //amount_donate_caculate
                                           $('#dg_donation').panel('open');
                                           $('#tb_donation').datagrid('load','<?=base_url()?>index.php/welcome/amount_donate_caculate/'  +  amount    );
                                    "   > (>=) </a>
                   
               </td>
           </tr>
           <tr>
               <td>
                   ประเภทของการบริจาค :
               </td>
               <td>
                   <input class="easyui-combobox"  id="tax"  style="width:140px;height: 30px"  data-options="
                          valueField:'label',
                          textField:'value',
                          data:[    
                          {  label:'1',value:'แบบธรรมดา'  },
                          {  label:'2'  ,value:'แบบลดหย่อนภาษี'  },
                          ],
                          onSelect:function(e)
                          {
                                 var  id=$('#tax').combobox('getValue');
                                 var   url='<?=base_url()?>index.php/welcome/tax_donate/'  + id
                                $('#dg_donation').panel('open');
                                 $('#tb_donation').datagrid('load',  url    );
                          }
                          "  />
               </td>
           </tr>
           
           <tr>
               <td>
                   ค้นหาจากที่อยู่ :
               </td>
               <td>
                   
                   
                   
                   <input class="easyui-combobox"  
                          id="address"
                          style="width:260px;height: 50px"
                          data-options=" 
                              url:'<?=base_url()?>index.php/welcome/combo_address/',
                               valueField:'id_donation',
                               textField:'address',
                              columns :[[   
                                {  field:'address',title:'ที่อยู่'   },
                                { field:'name_donation',title:'ชื่อ' },
                                { field:'lastname_donation',title:'นามสกุล' },
                              ]],
                              onSelect:function()
                                  {  
                                       var  id=$('#address').combobox('getValue');
                                       var   url= '<?=base_url()?>index.php/welcome/address/' + id;
                                       $('#dg_donation').panel('open');
                                       $('#tb_donation').datagrid('load', url  );
                                   }
                              
                          "
                          />
                   
                   
               </td>
           </tr>
           
       </table>
       
        
     
        
    </div>
   <!-- ค้นหา -->

