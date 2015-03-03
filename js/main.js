function toggleField(field) {
var myTarget = document.getElementById(field);
if(myTarget.style.display == 'none'){
  myTarget.style.display = 'block';
    } else {
  myTarget.style.display = 'none';
  myTarget.value = '';
}
}


$(function() {
    $( ".datefrom" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        minDate: new Date(2010, 1 - 1, 1),
        maxDate: '0',
        onSelect: function( selectedDate ) {
            // $date = $.datepicker.parseDate( "yy-mm-dd", selectedDate);
            // $year = $date.getFullYear();
            // //alert($year);
            $( "#mpaka" ).datepicker( "option", "minDate", selectedDate)
            .attr('readonly','readonly');
        }
    });
    $( ".dateto" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        minDate: new Date(2010, 1 - 1, 1),
        maxDate: '0',
        onSelect: function( selectedDate ) {
            $( "#kuanzia" ).datepicker( "option", "maxDate", selectedDate )
            .attr('readonly','readonly');
        }
    });
});

 $(function() {
$( ".datefrom" ).datepicker();
});

//$(function() {
//    $( ".datefrom" ).datepicker({
//        dateFormat: 'yy-mm-dd',
//        changeMonth: true,
//        changeYear: true,
//        minDate: new Date(2010, 1 - 1, 1),
//        maxDate: '0',
//        onSelect: function( selectedDate ) {
//            // $date = $.datepicker.parseDate( "yy-mm-dd", selectedDate);
//            // $year = $date.getFullYear();
//            // //alert($year);
//            $( ".dateto" ).datepicker( "option", "minDate", selectedDate)
//            .attr('readonly','readonly');
//        }
//    });
//    $( ".dateto" ).datepicker({
//        dateFormat: 'yy-mm-dd',
//        changeMonth: true,
//        changeYear: true,
//        minDate: new Date(2010, 1 - 1, 1),
//        maxDate: '0',
//        onSelect: function( selectedDate ) {
//            $( ".datefrom" ).datepicker( "option", "maxDate", selectedDate )
//            .attr('readonly','readonly');
//        }
//    });
//});



$(function () {
    // 6 create an instance when the DOM is ready
    $('#jstree').jstree();
    // 7 bind to events triggered on the tree
    $('#jstree').on("changed.jstree", function (e, data) {
      console.log(data.selected);
    });
    // 8 interact with the tree - either way is OK
    $('button').on('click', function () {
      $('#jstree').jstree(true).select_node('child_node_1');
      $('#jstree').jstree('select_node', 'child_node_1');
      $.jstree.reference('#jstree').select_node('child_node_1');
    });
  });
  


$(function(){
    $('#link_1 a').live('click',function(){
    var ctrl=$(this).attr('data-position'); 
    
        $('#space1').html("<div align='center'><img src='"+CI.base_url+"/img/loading.gif'></div>");
          var va = 1;
          var dataString = 'link_data='+ va;
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+ctrl+"/getLinkContent",  
                 data: dataString,  
                 success: function(data) { 
                    $('#space1').html(data);
                 }  
                 });
                 
                 return false;
        });  
       
});


$(function(){
    $('#link_2 a').live('click',function(){
    var ctrl=$(this).attr('data-position'); 
    
        $('#space1').html("<div align='center'><img src='"+CI.base_url+"/img/loading.gif'></div>");
          var va = 2;
          var dataString = 'link_data='+ va;
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+ctrl+"/getLinkContent",  
                 data: dataString,  
                 success: function(data) { 
                    $('#space1').html(data);
                 }  
                 });
                 
                 return false;
        });  
       
});



$(function(){
    $('#link_3 a').live('click',function(){
      var ctrl=$(this).attr('data-position'); 
     $('#space1').html("<div align='center'><img src='"+CI.base_url+"/img/loading.gif'></div>");
        var va = 3;
        var dataString = 'link_data='+ va;
       $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+ctrl+"/getLinkContent",  
                 data: dataString,  
                 success: function(data) { 
                    $('#space1').html(data);
                 }  
                 });
                 
                 return false;
        });  
       
       
});

$(function(){
    $('#link_4 a').live('click',function(){
      var ctrl=$(this).attr('data-position'); 
     $('#space1').html("<div align='center'><img src='"+CI.base_url+"/img/loading.gif'></div>");
        var va = 4;
        var dataString = 'link_data='+ va;
       $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+ctrl+"/getLinkContent",  
                 data: dataString,  
                 success: function(data) { 
                    $('#space1').html(data);
                 }  
                 });
                 
                 return false;
        });  
       
       
});


$(function(){
    $('#link_5 a').live('click',function(){
    var ctrl=$(this).attr('data-position'); 
    
        $('#space1').html("<div align='center'><img src='"+CI.base_url+"/img/loading.gif'></div>");
          var va = 5;
          var dataString = 'link_data='+ va;
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+ctrl+"/getLinkContent",  
                 data: dataString,  
                 success: function(data) { 
                    $('#space1').html(data);
                 }  
                 });
                 
                 return false;
        });  
       
});


$(function(){
    $('#link_6 a').live('click',function(){
    var ctrl=$(this).attr('data-position'); 
    
        $('#space1').html("<div align='center'><img src='"+CI.base_url+"/img/loading.gif'></div>");
          var va = 6;
          var dataString = 'link_data='+ va;
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+ctrl+"/getLinkContent",  
                 data: dataString,  
                 success: function(data) { 
                    $('#space1').html(data);
                 }  
                 });
                 
                 return false;
        });  
       
});

$(function(){
    $('#link_7 a').live('click',function(){
    var ctrl=$(this).attr('data-position'); 
    
        $('#space1').html("<div align='center'><img src='"+CI.base_url+"/img/loading.gif'></div>");
          var va = 7;
          var dataString = 'link_data='+ va;
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+ctrl+"/getLinkContent",  
                 data: dataString,  
                 success: function(data) { 
                    $('#space1').html(data);
                 }  
                 });
                 
                 return false;
        });  
       
});

$("#send_wilayani").live('click', function(e){
    e.preventDefault();
    var href = this.href;
    alertify.confirm("Umekaribia kuhamisha Jalada hili kwenda Wilayani", function (e) {
        if (e) {
            window.location.href = href;
        }
    });
})


$("#send_mkoani").live('click', function(e){
    e.preventDefault();
    var href = this.href;
    alertify.confirm("Umekaribia kuhamisha Jalada hili kwenda Mkoani", function (e) {
        if (e) {
            window.location.href = href;
        }
    });
})


$(document).ready( function() {
    $('#confirmpass').val('');
            $('#position').val('');  
        $('.error').delay(5000).fadeOut();
      });

$(document).ready( function() {
        $('#flash').delay(5000).fadeOut();
      });



$(function(){
    $('#region_police').live('change',function(){
         $('reactivateUser').hide();
         var testregion=$('#region_police').val();
        if(testregion=== ''){
        $('#space1').load(CI.base_url_ajax+"/getSpaceHolder");  
          $('#space1').hide();
          $('#space2').hide();
          $('#space3').hide();
        }else{
         var dataString = 'region_policeid='+ this.value;
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+"admin/getPolisiDistrict",  
                 data: dataString,  
                 success: function(data) { 
                    $('#space1').html(data);

                    $('#space1').show();

                 }  
                 });
                 
                 return false;
        
    }
    });
   });    


$(function(){
    $('#district_police').live('change',function(){
        var testdistrict=$('#district_police').val();
        //alert(testdistrict); 
        $('reactivateUser').hide();
        if(testdistrict===''){
        $('#space2').load(CI.base_url_ajax+"/getSpaceHolder");  
        $('#space2').hide();
        $('#space3').hide();
        }else{
         //var dataString = 'ward_policeid='+ this.value;
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+"admin/getPolisiWard",  
                 data: {district_policeid:testdistrict},  
                 success: function(data) { 
                    $('#space2').html(data);
                    $('#space2').show();
                 }  
                 });
                 
                 return false;
        }
  });  
       
});




$(function(){
    $('#ward_police').live('change',function(){
        var testward=$('#ward_police').val();
        $('reactivateUser').hide();
        if(testward===''){
        $('#space2').load(CI.base_url_ajax+"/getSpaceHolder");  
        $('#space3').hide();

        }else{
         var dataString = 'ward_policeid='+ this.value;
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+"admin/getPolisiStation",  
                 data: dataString,  
                 success: function(data) { 
                    $('#space3').html(data);
                    $('#space3').show();
                 }  
                 });
                 
                 return false;
        }
  });  
       
});





//newuser information submition
$(function(){
    $("#fno").live('mouseleave keyup',function(){ 
      var fno=$('#fno').val(); 
      if(fno==='')
      {
       $("#fno").css({'border-color':'red'});   
      }
      else
      {
        $("#fno").css({'border-color':'green'});  
        
      }
      return false;
    });
    $("#fname").live('mouseleave keyup',function(){ 
      var fno=$('#fname').val(); 
      if(fno==='')
      {
       $("#fname").css({'border-color':'red'});   
      }
      else
      {
        $("#fname").css({'border-color':'green'});   
      }
      return false;
    });
    $("#mname").live('mouseleave keyup',function(){ 
      var fno=$('#mname').val(); 
      if(fno==='')
      {
       $("#mname").css({'border-color':'red'});   
      }
      else
      {
        $("#mname").css({'border-color':'green'});   
      }
      return false;
    });
    
    $("#lname").live('mouseleave keyup',function(){ 
      var fno=$('#lname').val(); 
      if(fno==='')
      {
       $("#lname").css({'border-color':'red'});   
      }
      else
      {
        $("#lname").css({'border-color':'green'});   
      }
      
      return false;
    });
    
    
    $("#phone").live('mouseleave keyup',function(){ 
      var fno=$('#phone').val(); 
      if(fno==='')
      {
       $("#phone").css({'border-color':'red'});   
      }
      else
      {
        $("#phone").css({'border-color':'green'});   
      }
      
      return false;
    });
    
    $("#password").live('mouseleave keyup',function(){ 
        $('reactivateUser').hide();
      var password=$('#password').val(); 
      if(password==='')
      {
       $("#password").css({'border-color':'red'});   
      }
      else
      {
        $("#password").css({'border-color':'green'});   
      }
      
      return false;
    });
        
    $("#confirmpass").live('mouseleave keyup',function(){ 
      var confirmpass=$('#confirmpass').val(); 
      if(confirmpass==='')
      {
       $("#confirmpass").css({'border-color':'red'});   
      }
      else
      {
        $("#confirmpass").css({'border-color':'green'});   
      }
      
      return false;
    });
    
    
    
    $("#position").live('mouseleave keyup',function(){ 
      var fno=$('#position').val(); 
      if(fno==='')
      {
       $("#position").css({'border-color':'red'});   
      }
      else
      {
        $("#position").css({'border-color':'green'});   
      }
      return false;
    });
    
    $("#region_police").live('mouseleave keyup',function(){ 
        var fno=$('#region_police').val(); 
          if(fno==='')
          {
            $("#region_police").css({'border-color':'red'});   
          }
           else
          {
            $("#region_police").css({'border-color':'green'});   
          }
          return false;
    });
    
    
    $("#district_police").live('mouseleave keyup',function(){ 
         var fno=$('#district_police').val(); 
          if(fno==='')
           {
            $("#district_police").css({'border-color':'red'});   
           }
          else
           {
             $("#district_police").css({'border-color':'green'});   
           }
          return false;
    });
    
    
   $("#ward_police").live('mouseleave keyup',function(){ 
      var fno=$('#ward_police').val(); 
         if(fno==='')
          {
           $("#ward_police").css({'border-color':'red'});   
          }
         else
          {
            $("#ward_police").css({'border-color':'green'});   
          }
         return false;
    });
    
    
     $("#station_police").live('mouseleave keyup',function(){ 
      var fno=$('#station_police').val(); 
         if(fno==='')
          {
           $("#station_police").css({'border-color':'red'});   
          }
         else
          {
            $("#station_police").css({'border-color':'green'});   
          }
         return false;
    });
    

    
    $('#addnewuser').live('click',function(){
        $('reactivateUser').hide();
        var fno=$('#fno').val();
        var fname=$('#fname').val();
        var lname=$('#lname').val();
        var mname=$('#mname').val();
        var confirmpass=$('#confirmpass').val();
        var region_police=$('#region_police').val();
        var district_police=$('#district_police').val();
        var ward_police=$('#ward_police').val();
        var station_police=$('#station_police').val(); 
        var mobilephone=$('#phone').val(); 
        var position=$('#position').val();
        var password=$('#password').val(); 
        var confirmpass=$('#confirmpass').val(); 
        
        
        if(fno===''||fname===''||lname===''||mname===''||region_police===''||district_police===''||ward_police===''||position===''||password===''||confirmpass==='')
        {
          var p=$('#beforeload').css({'color':'red'}).text('Fill all the information');
          $('#beforeload').show(p);
        }
        else
        {  
          $('#beforeload').hide(p);
          if(password!=confirmpass){
            $('#confirmpass').val('');
            $('#position').val('');  
            var p=$('#beforeload').css({'color':'red'}).text('Password does not match');
             $('#beforeload').show(p); 
         }
//         else
//         {
//         var dataString= 'fno='+ fno + '&fname=' + fname +'&lname='+lname+ '&mname='+mname + '&password='+password +'&position='+position+'&phone='+mobilephone+'&station_id='+station_police;
//         $.ajax({
//                  beforeSend:function()
//                  {
//                   $('#loadingimage').show(); 
//                  },
//                  type: "POST",  
//                  url:  CI.base_url_ajax+"admin/addNewusers",  
//                  data: dataString, 
//                  success:function(){
//                  url:  CI.base_url_ajax+"admin/viewUsers",
//                  $('#loadingimage').hide();
//                  $('#space2').hide(); 
//                  $('#space3').hide();
//                  $('#space1').hide(); 
//                  $('#fno').val('');
//                  $('#fname').val('');
//                  $('#lname').val('');
//                  $('#mname').val('');
//                  $('#phone').val('');
//                  $('#password').val('');
//                  $('#confirmpass').val('');
//                  $('#position').val('');
//                  },
//                 Complete:function(){
//                  $('#loadingimage').hide();
//                  $('#space2').hide(); 
//                  $('#space3').hide();   
//                  $('#space1').hide(); 
//                 }  
//                  
//                });
//            }
        }
        
          //return false;
        });

  //viewing more information for the user and updating user position
  
  $('#changeposition a').live('click',function(){
    var userid=$(this).attr('data-position'); 
     $('#activateuserwindowbefore').hide();
     $('reactivateUser').hide();
    $.ajax({
            beforeSend:function(){
            $('#formsfordeleteupdatedeactivateuser').show();  
            $('#formsfordeleteupdatedeactivateuser').show();    
            },
            type :'POST',
            url  : CI.base_url_ajax+"admin/getCurrentposition", 
            data: {textbox:userid},
            success:function(data){
             $('#formsfordeleteupdatedeactivateuser').html(data);
             $('#close').show();
             $('#formsfordeleteupdatedeactivateuser').show(); 
             $('reactivateUser').hide();
             
            }     
    })
    return false;
  });
 $('#updateposition').live('click', function(){
    var userid=$('#userid').val();
    var position=$('#policeposition').val();
     $('#activateuserwindowbefore').hide();
     $('reactivateUser').hide();
    if(position==='')
    {
     $("#policeposition").css({'border-color':'red'});   
    }
    else
    {
       
     $('#loadingimage').html("<img src='../../../images/loading.gif' height='8px'>");
     $("#policeposition").css({'border-color':'green'});
     $.ajax({
            beforeSend:function(){
            $('#loadingimage').show();  
          },
          type :'POST',
          url  : CI.base_url_ajax+"admin/UpdatePosition", 
          data:{userid:userid,newpositionId:position},
           success:function(data){
             $('#loadingimage').hide();
             $('#success').show();
         },
             Complete:function(){
                 // $('#loadingimage').hide();  
                  $('#formsfordeleteupdatedeactivateuser').hide();
                  $('#close').hide();
                  $('#formsfordeleteupdatedeactivateuser').hide();  
                 }
          
      });
    }
     
 });   
 $('#cancel').live('click', function(){
     
     $('#formsfordeleteupdatedeactivateuser').hide();
     return false;
 });
 //Transfering user to another location
  $('.btn-court').live('mouseover', function(){
     
     $('.btn-court').css({'color':'#fff'});
     
 });
 
 
 
 
 
 
 

//Activating and deactivating User

$('#activateuser a').live('click',function(){
    //$('#activateuserwindow').show();
     var userid=$(this).attr('data-deactivate');
     $('#formsfordeleteupdatedeactivateuser').hide(); 
     $('reactivateUser').hide();
      $.ajax({
          beforeSend:function(){
              $('#activateuserwindowbefore').show();
            
          },
          type:'POST',
          url  : CI.base_url_ajax+"admin/DeactivateUser", 
          data: {textbox:userid},
          success:function(data)
          {
            $('#activateuserwindowbefore').hide();  
            $('reactivateUser').hide();
            $('#activateuserwindow').show();     
          }   
      });
    return false;
    
});

$('#reactivateUser a').live('click',function(){
    //$('#activateuserwindow').show();
     var userid=$(this).attr('data-deactivate');
     $('reactivateUser').hide();
    $.ajax({
        beforesend:function(){
           $('#activateuserwindowbefore').show();   
        },
        type:'POST',
        url  : CI.base_url_ajax+"admin/ActivateUser", 
        data: {text:userid},
        success:function(data){   
        $('#activateuserwindowbefore').hide();   
        $('#userreactivate').show();    
        
        }
        
    });
    
    return false;
    
});

// ************************* ******************************* ***************************//


//User transfer 

$('#transfer a').live('click',function(){
    
    var userid=$(this).attr('data-transfer');
     $('reactivateUser').hide();
     $('#formsfordeleteupdatedeactivateuser').hide(); 
     $('#activateuserwindowbefore').show();
    $.ajax({
        beforesend:function(){
           $('#activateuserwindowbefore').show();   
        },
        type:'POST',
        url  : CI.base_url_ajax+"admin/getOldstationinfo", 
        data: {text:userid},
        success:function(data){   
        $('#activateuserwindowbefore').hide();   
        $('#usertransfer').html(data);    
        $('#usertransfer').show();
        
        }
        
    });

    return false;
    
});

$('#region_policenewlocation').live('change', function(){
        $('reactivateUser').hide();
        var testregionnew=$('#region_policenewlocation').val();
        if(testregionnew=== '')
        {
          $('#space4').hide();
          $('#space5').hide();
          $('#space6').hide();
          $('#space7').hide(); 
        }
        else
        {
           var dataString = 'region_policenewlocation='+ this.value;
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+"admin/getPolisiDistrictnewLocation",  
                 data: dataString,  
                 success: function(data) { 
                    $('#space4').html(data);

                    $('#space4').show();

                 }  
                 });   
        }
      return false;    
});

$('#district_policenewlocation').live('change', function(){
        $('reactivateUser').hide();
        var testdistrictnew=$('#district_policenewlocation').val();
        if(testdistrictnew=== '')
        {
          $('#space5').hide();
          $('#space6').hide();
          $('#space7').hide(); 
        }
        else
        {
           var dataString = 'district_policenewlocation='+ this.value;
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+"admin/getPolisiWardnewLocation",  
                 data: dataString,  
                 success: function(data) { 
                    $('#space5').html(data);

                    $('#space5').show();

                 }  
                 });   
        }
      return false;    
});

$('#ward_policenewLocation').live('change', function(){
        $('reactivateUser').hide();
        var testwardnew=$('#ward_policenewLocation').val();
        if(testwardnew=== '')
        {
          $('#space6').hide(); 
          $('#space7').hide(); 
        }
        else
        {
           var dataString = 'ward_policenewLocation='+ this.value;
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+"admin/getPolisiStationnewLocation",  
                 data: dataString,  
                 success: function(data) { 
                    $('#space6').html(data);

                    $('#space6').show();

                 }  
                 });   
        }
      return false;    
});

$('#station_policenewLocation').live('change', function(){
  
        $('reactivateUser').hide();
        var teststationnew=$('#station_policenewLocation').val();
        if(teststationnew===''){
          $('#space7').hide();   
        }
        else
        {
          $('#space7').show();     
        }
      return false;    
});

$('#UpdateNewLocation').live('click', function(){
  var UpdateNewLocation=$('#station_policenewLocation').val();
  var userid=$('#userid').val();
   $.ajax({
          type:'POST',
          url : CI.base_url_ajax+'admin/UpdateLocation',
          data:{id:userid,locationnew:UpdateNewLocation},
          success:function(data){
            $('#alertmessage').show();   
          }
   });
      return false;    
});




// *************** changing userpassword from admin panel *******************************//
$('#resetpassword a').live('click', function(){
 //$('#activateuserwindowbefore').show();  
  var userid=$(this).attr('data-resetpass');
  $.ajax({
      beforesend:function(){
       $('#activateuserwindowbefore').show();        
      },
      type:'POST',
      url:  CI.base_url_ajax+"admin/getuserOldpassword",
      data:{id:userid},
      success:function(data){
          $('#changepassword').html(data);
          $('#changepassword').show();
          $('#activateuserwindowbefore').hide();   
      }
      
  });
 return false;
});
$('#setpassword').live('click', function(){
    var pass=$('#pass').val();
    var confirmpass=$('#confirmpass').val();
    var userid=$('#userid').val();
    if(pass==='')
    {
      $("#pass").css({'border-color':'red'});  
    }
    else
    {
      $("#pass").css({'border-color':'green'});
      
    }
    if(confirmpass==='')
    {
       $("#confirmpass").css({'border-color':'red'});     
    }
    else
    {
     $("#confirmpass").css({'border-color':'green'});       
    }
    if(pass!==confirmpass)
    {
      $("#confirmpass").css({'border-color':'red'});
      $("#pass").css({'border-color':'red'});
    }
    else
    {
      if((pass===confirmpass)&& (pass!=='' || confirmpass!==''))
      {
      $("#confirmpass").css({'border-color':'green'});
      $("#pass").css({'border-color':'green'});  
      $.ajax({
             type:'POST',
             url:  CI.base_url_ajax+"admin/resetPassword",
             data:{id:userid,password:pass}, 
             success:function(data){
             $('#passwordchangesuccess').show();
             }
          
          
      });
      
      
      
      }
      
      
      
      
    }
    
    
    return false;
    
});










// ***********************     ***************************      ***************************//

// ****************************************  search by Rb Namba ********************** *********************//

$("#searchbyrb").on('keyup',function(e){
   var value=$(this).val();
     
    if(value===''){
      $('#suggestedrbdropdown').hide();  
    }
    else
    {
     $.ajax({
          type:'POST',
          url:  CI.base_url_ajax+"cro/getoutlineRb",
          data:{data:value}, 
          success:function(data){
            $("#suggestedrbdropdown").html(data);
            $('#suggestedrbdropdown').show();
             },
     }); 
     
     
    }
 return false;
});




//**********************  mahakama ***********************//

$("#send_mahakamani a").live('click',function(e){
   var value=$(this).attr('data-offence');
   var controller=$(this).attr('data-controller');
    $('#courtclosewindow').show();
     $('#close').show();        
   $.ajax({
          type:'POST',
          url:  CI.base_url_ajax+ controller +'/LoadCourt',
          data:{data:value,controller:controller}, 
           success:function(data){
            $("#courtforminfo").html(data);
            $('#courtforminfo').show();
             
            },
        
    }); 
 return false;
});
$("#peleka").live('click',function(e){
    var offenceid=$('#offenceid').val();
    var courtname=$('#courtname').val();
    var controller=$('#controller').val();
    var courtid=$('#courtid').val();
    
    if(offenceid==='')
    {
      $("#offenceid").css({'border-color':'red'});  
    }
    else
    {
      $("#offenceid").css({'border-color':'green'});
      
    }
    if(courtname==='')
    {
       $("#courtname").css({'border-color':'red'});     
    }
    else
    {
     $("#courtname").css({'border-color':'green'});       
    }
     if(courtid==='')
    {
      $("#courtid").css({'border-color':'red'});  
    }
    else
    {
      $("#courtid").css({'border-color':'green'});
       
      
      
    }
    if(offenceid!==''&& courtname!==''&&courtid!=='')
    {
      $.ajax({
          type:'POST',
           url : CI.base_url_ajax+ controller +'/TransfertoCourt',
          data:{offenceid:offenceid,courtname:courtname,courtid:courtid}, 
           success:function(data){
            $("#courtforminfo").html(data)
            $('#courtforminfo').show();
            },
        
      });   
    }
 return false;
});

//*********************************** end of mahakama  ***********************//



$("#addwapelelezi").live('click',function(e){
   var offence_no=$('#offence_no').val();
   var offence_status=$('#offence_status').val();
   var controller=$('#controller').val();
   var wapeleleziid=$('#wapeleleziid').val();
   

   
   if(wapeleleziid==='')
   {
    $("#confirmpass").css({'border-color':'red'});         
   }
   else
   {
     $("#wapeleleziid").css({'border-color':'green'}); 
     $.ajax({
          type:'POST',
           url : CI.base_url_ajax+ controller +'/AddMpelezi',
           data:{offence_no:offence_no,offence_status:offence_status,wapeleleziid:wapeleleziid}, 
           success:function(data){
            $("#showmpelelezi").html(data);
            $("#showmpelelezi").show();
            $("#hideorigionwapelezi").hide();                 
            $('#myModal1').modal('hide');
            
           },
        
      });
   }
  
   return false;   
   
   
   });

$("#ruhusukupeleleza a").live('click',function(e){
      var controller=$(this).attr('data-controller'); 
      var offence_no=$(this).attr('data-offence');
      var data_id=$(this).attr('data-id');
      var force_no=$(this).attr('data-force_no');
       var offence_statusid=$(this).attr('data-offence_statusid');
     
      $.ajax({
             type:'POST',
             url:CI.base_url_ajax+ controller +'/allowToInvestigate',
             data:{offence_no:offence_no,force_no:force_no,offence_statusid:offence_statusid,data_id:data_id},
             success: function(data){
                  $('#showmpelelezi').html(data);
                  $('#showmpelelezi').show();
                  $('#hideorigionwapelezi').hide();  
             }
         
         
     });

    return false; 
    
    
});

$("#kutokurusukupeleleza a").live('click',function(e){
      var controller=$(this).attr('data-controller'); 
      var offence_no=$(this).attr('data-offence');
      var data_id=$(this).attr('data-id'); 
      var force_no=$(this).attr('data-force_no');
       var offence_statusid=$(this).attr('data-offence_statusid');
     
      $.ajax({
             type:'POST',
             url:CI.base_url_ajax+ controller +'/disallowToInvestigate',
           data:{offence_no:offence_no,force_no:force_no,offence_statusid:offence_statusid,data_id:data_id},
             success: function(data){
                  $('#showmpelelezi').html(data);
                  $('#showmpelelezi').show();
                  $('#hideorigionwapelezi').hide();  
             }
         
         
     });

    return false; 
    
    
});


$("#ruhusumplelezikujazatarifazamahakama a").live('click',function(e){
      var controller=$(this).attr('data-controller'); 
      var offence_no=$(this).attr('data-offence');
      var data_id=$(this).attr('data-id'); 
      var force_no=$(this).attr('data-force_no');
       var offence_statusid=$(this).attr('data-offence_statusid');
     
      $.ajax({
             type:'POST',
             url:CI.base_url_ajax+ controller +'/allowFillCourtinfo',
             data:{offence_no:offence_no,force_no:force_no,offence_statusid:offence_statusid,data_id:data_id},
             success: function(data){
                  $('#showmpelelezi').html(data);
                  $('#showmpelelezi').show();
                  $('#hideorigionwapelezi').hide();  
             }
         
         
     });

    return false; 
    
    
});

$("#usiruhusumplelezikujazatarifazamahakama a").live('click',function(e){
      var controller=$(this).attr('data-controller'); 
      var offence_no=$(this).attr('data-offence');
        var data_id=$(this).attr('data-id'); 
      var force_no=$(this).attr('data-force_no');
       var offence_statusid=$(this).attr('data-offence_statusid');
     
      $.ajax({
             type:'POST',
             url:CI.base_url_ajax+ controller +'/disallowFillCourtinfo',
             data:{offence_no:offence_no,force_no:force_no,offence_statusid:offence_statusid,data_id:data_id},
             success: function(data){
                  $('#showmpelelezi').html(data);
                  $('#showmpelelezi').show();
                  $('#hideorigionwapelezi').hide();  
             }
         
         
     });

    return false; 
    
    
});


$("#kesihatua").live('change',function(e){
    var hatua=$('#kesihatua').val();
        if(hatua===3)
        {
           $.ajax({
                   type: 'POST',
                   url: CI.base_url_ajax+'/view/common/form/view_kesiImefungwa',
                   data:{},
                   success:function(data){
                     $('#hatuatarajiwa1').html(data); 
                     $('#hatuatarajiwa1').show();
                     $('#hatuatarajiwa2').hide();  
                   }
           }); 
            
            
        }
      
        
    return false;
});


//*************************** end of Upelelezi info ******************//

$("#addushahidi").live('click',function(e){
     var offence_no=$('#offence_no').val();
     var ushahidi=$('#ushahidi').val();
     var offence_status=$('#offence_status').val();
     var controller=$('#controller').val();
    $.ajax({
        url: CI.base_url_ajax+controller+'/addEvidence',
        data: function() {
                var data = new FormData();
                    data.append("chosenFile", $("#file_source").get(0).files[0]);
                    data.append('offence_no',offence_no);
                    data.append('ushahidi',ushahidi);
                    data.append('offence_status',offence_status);
                    return data;    
                    // Or simply return new FormData(jQuery("form")[0]);
                }(),
         contentType: false,
        processData: false,
        type: 'POST',
        success: function (data) {
//            alert(data);
//           exit();
        $("#upload-file-info").val('');
        $("#ushahidi").val('');
        $("#upload-file-info").html('')
        //$('#myModal2').modal('hide');
         $("#successushahidiinfo").html('Umefanikiwa kuongeza ushahidi');
         $("#successushahidiinfo").show().delay(4000).fadeOut();
         $('#showushahidiloaded').html(data);
         $('#showushahidiloaded').show();
         $('#showorigionushahidi').hide();
        }
    });

    return false;   
});


$("#deleteushahidi a").live('click',function(e){
      var controller=$(this).attr('data-controller'); 
      var ushahidiid=$(this).attr('data-id');
      var offence_no=$(this).attr('data-offence');
     $.ajax({
             type:'POST',
             url:CI.base_url_ajax+ controller +'/deleteEvidence',
             data:{ushahidiid:ushahidiid,offence_no:offence_no},
             success: function(data){
                  $('#showushahidiloaded').html(data);
                  $('#showushahidiloaded').show();
                  $('#showorigionushahidi').hide();  
             }
         
         
     });

    return false;   
});

// ****************************** end of ushahidi info **************************//




$("#hatuazakimahakama").live('change',function(e){
         var datainfo=$('#hatuazakimahakama').val();
         var controller=$('#controller').val();
         $('#imefungwa').hide();   
         $('#athabufactors').hide();
         $('#athabufactorkifungo').hide();
         if(datainfo==3)
         {
           $.ajax({
             type:'POST',
             url:CI.base_url_ajax+ controller +'/view_kesiImefungwa',
             success: function(data){
                  $('#imefungwa').html(data);
                  $('#imefungwa').show();
             }
         
         
           });   
        }
        else
        {
         
        }
        
         
    
    return false;   
});

$("#courtclosinginfo").live('change',function(e){
         var datainfo=$('#courtclosinginfo').val();
         var controller=$('#controller').val();
         $('#athabufactors').hide();
         $('#athabufactorkifungo').hide();
         if(datainfo==3)
         {
           $.ajax({
             type:'POST',
             url:CI.base_url_ajax+ controller +'/view_adhabuform',
             success: function(data){
                  $('#athabufactors').html(data);
                  $('#athabufactors').show();
             }
         
         
           });   
        }
        else
        {
         
        }
        
         
    
    return false;   
});

$("#pernaltfactorid").live('change',function(e){
         var datainfo=$('#pernaltfactorid').val();
         var controller=$('#controller').val();
         $('#athabufactorkifungo').hide();
         if(datainfo==1)
         {
             $.ajax({
             type:'POST',
             url:CI.base_url_ajax+ controller +'/pernartFactors',
              data:{datainfo:datainfo},
             success: function(data){
                  $('#athabufactorkifungo').html(data);
                  $('#athabufactorkifungo').show();
             }
         
         
              });   
         }
        if(datainfo==2)
         {
           
            $.ajax({
             type:'POST',
             url:CI.base_url_ajax+ controller +'/pernartFactors',
             data:{datainfo:datainfo},
             success: function(data){
                  $('#athabufactorkifungo').html(data);
                  $('#athabufactorkifungo').show();
             }
         
         
              });
        }
          if(datainfo==3)
         {
           
           
            $.ajax({
             type:'POST',
             url:CI.base_url_ajax+ controller +'/pernartFactors',
             data:{datainfo:datainfo},
             success: function(data){
                  $('#athabufactorkifungo').html(data);
                  $('#athabufactorkifungo').show();
             }
            });
        }
        
         
    
    return false;   
});

$('#addhatuazamahakama').live('click',function(e){
   var controller=$('#controller').val();
   var offence_no=$('#offence_no').val();
   var offence_status=$('#offence_status').val();
   var hatuatarehe=$('#hatuatarehe').val(); 
   var mahakamaid=$('#mahakamaid').val();
   var chaguaWatuhumiwa=$('#chaguaWatuhumiwa').val();
   var hatuazakimahakama=$('#hatuazakimahakama').val();
   var pernaltfactorid=$('#pernaltfactorid').val();
   var courtclosinginfo=$('#courtclosinginfo').val();
   var jailyearsid=$('#jailyearsid').val();
   var jailmonthsid=$('#jailmonthsid').val();
   var amount=$('#amount').val();
   var ushahidi=$('#ushahidiId').val();
   if(hatuatarehe=='')
   {
     $('#hatuatarehe').css({'color':'red'});  
   }
   else
   {
     $('#hatuatarehe').css({'color':'green'});
     
     if(mahakamaid=='')
     {
      $('#mahakamaid').css({'color':'red'});     
      
     }
     else
     {
       $('#mahakamaid').css({'color':'green'}); 
       
       if(chaguaWatuhumiwa=='')
       {
         $('#chaguaWatuhumiwa').css({'color':'red'});    
       }
       else
       {
        $('#chaguaWatuhumiwa').css({'color':'green'});    
         if(hatuazakimahakama=='')
         {
          $('#hatuazakimahakama').css({'color':'red'});       
         }
         else
         {
           $('#hatuazakimahakama').css({'color':'green'});
           
           if(courtclosinginfo=='')
           {
            $('#courtclosinginfo').css({'color':'red'});       
           }
           else
           {
             $('#courtclosinginfo').css({'color':'green'});
             
             $.ajax({
             type:'POST',
             url:CI.base_url_ajax+ controller +'/courtTaarifa',
             data:{
                  tarehe:hatuatarehe,mahakamaid:mahakamaid,chaguaWatuhumiwa:chaguaWatuhumiwa,
                  hatuazakimahakama:hatuazakimahakama,pernaltfactorid:pernaltfactorid,
                  courtclosinginfo:courtclosinginfo,jailyearsid:jailyearsid,jailmonthsid:jailmonthsid,
                  amount:amount,ushahidi:ushahidi,offence_no:offence_no,offence_status:offence_status
                 },
                 success: function(data){
                 $('#showcourttaarifa').html(data);
                 $('#showcourttaarifa').show();
                 $('#showoriginalcourttaarifa').hide();
                 $('#controller').val(' ');
                 $('#offence_no').val('');
                 $('#offence_status').val(' ');
                 $('#hatuatarehe').val(''); 
                 $('#mahakamaid').val(' ');
                 $('#chaguaWatuhumiwa').val(' ');
                 $('#hatuazakimahakama').val(' ');
                 $('#pernaltfactorid').val(' ');
                 $('#courtclosinginfo').val(' ');
                 $('#jailyearsid').val(' ');
                 $('#jailmonthsid').val(' ');
                 $('#amount').val(' ');
                 $('#ushahidiId').val('');
                 $('#hatuatarehe').css({'color':'black'});
                 
                 $('#mahakamaid').css({'color':'black'});   
                 $('#chaguaWatuhumiwa').css({'color':'black'}); 
                 $('#hatuazakimahakama').css({'color':'black'});
                 $('#courtclosinginfo').css({'color':'black'});
                 $('#myModal3').modal('hide');
             }
            });
             
             
             
             
             
             
               
          }
           
         }
         
        
        
        
       }
     }
   }
        
});

$('#deletecourttaarifa a').live('click', function(e){
      var controller=$(this).attr('data-controller'); 
      var courtinfoid=$(this).attr('data-id');
      var offence_no=$(this).attr('data-offence');
     $.ajax({
             type:'POST',
             url:CI.base_url_ajax+ controller +'/deleteCourtinfo',
             data:{courtinfoid:courtinfoid,offence_no:offence_no},
             success: function(data){
                  $('#showcourttaarifa').html(data);
                  $('#showcourttaarifa').show();
                  $('#showoriginalcourttaarifa').hide();  
             }
         
         
     });

    return false;     
    
    
    
    
});

// **************************** end of mahakama information *******************//
$("#delete_kipengele_kosa").live('click', function(e){
    e.preventDefault();
    var href = this.href;
    alertify.confirm("Unakaribia kuondoa kipengele cha kosa", function (e) {
        if (e) {
            window.location.href = href;
        }
    });
});


$("#delete_station_btn").live('click', function(e){
    e.preventDefault();
    var href = this.href;
    alertify.confirm("Unakaribia kuondoa kituo cha Polisi", function (e) {
        if (e) {
            window.location.href = href;
        }
    });
});




$(document).ready( function() {
        $('.error').delay(5000).fadeOut();
      });

$(document).ready( function() {
        $('#flash').delay(5000).fadeOut();
      });



$(function(){
    $('#crime_type').live('change',function(){
        if(this.value == ''){
        $('#crime_cat_space').load(CI.base_url_ajax+"home/getSpaceHolder");
        $('#crime_subcat_space').load(CI.base_url_ajax+"home/getSpaceHolder");
        }else{
         var dataString = 'crime_typeid='+ this.value;
          
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+"cro/getCrimeCategory",  
                 data: dataString,  
                 success: function(data) { 
                    $('#crime_cat_space').html(data);
                 }  
                 });
                 
                 return false;
        }
  });  
       
});



$(function() {
    $( "#dob_mhusika" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        rangeSelect: true,
        minDate: new Date(1900, 10 - 1, 25), 
        //maxDate: new Date(2013,10 -1, 25),
        maxDate: new Date(),
    });
});


$(function(){
    $("body").on("click", "#date", function(){
        if (!$(this).hasClass("hasDatepicker"))
        {
            $(this).datetimepicker({
                dateFormat:'yy-mm-dd',
                changeMonth:true,
                changeYear:true,
                maxDate:0,
                //timeFormat: 'hh:mm',
                hourGrid: 4,
	        minuteGrid: 10,
                timeFormat: "HH:mm:ss"
            }).attr('readonly','readonly');
            $(this).datetimepicker("show");
        }
    });
});
$(function(){
    $("body").on("click", "#searchbydate", function(){
        if (!$(this).hasClass("hasDatepicker"))
        {
            $(this).datetimepicker({
                dateFormat:'yy-mm-dd',
                changeMonth:true,
                changeYear:true,
                maxDate:0,
                //timeFormat: 'hh:mm',
                hourGrid: 4,
	        minuteGrid: 10,
                timeFormat: "hh:mm:ss"
            }).attr('readonly','readonly');
            $(this).datetimepicker("show");
        }
    });
});


$(function(){
    $('#crime_category').live('change',function(){
        if(this.value == ''){
        $('#crime_subcat_space').load(CI.base_url_ajax+"home/getSpaceHolder");  
        }else{
        
           var crime_categoryid=$('#crime_category').val();
            if(crime_categoryid==39)
            {
                
                $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+"cro/getVehicle",  
                 data: {crime_categoryid:crime_categoryid},  
                 success: function(data) { 
                    $('#vehicle_typeid').html(data);
                     $('#crime_subcat_space').hide();
                   
                 }  
                });  
            }  
            else
            {
              
             $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+"cro/getCrimeSubCategory",  
                  data: {crime_categoryid:crime_categoryid},
                  success: function(data) { 
                    $('#crime_subcat_space').html(data);
                    $('#crime_subcat_space').show();
                    $('#vehicle_subcategoryid').hide();
                 }  
               });
                
            }
            
           
                 
                 
                 return false;
              }
  });  
       
});


$(function(){
    $('#vehicle_categoryid').live('change',function(){
       
        if(this.value == ''){
        $('#vehicle_subcategoryid').load(CI.base_url_ajax+"home/getSpaceHolder");  
        }else{
         var vehicle_categoryid=$('#vehicle_categoryid').val();
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+"cro/getVehiclesubcategory",  
                 data: {vehicle_categoryid:vehicle_categoryid},  
                 success: function(data) { 
                    $('#vehicle_subcategoryid').html(data);
                    $('#vehicle_subcategoryid').show();
                 }  
                 });
                 return false;
        }
  });  
       
});



$(function(){
    $('#aina_dawa').live('change',function(){
        if(this.value == ''){
        $('#dawa_space').load(CI.base_url_ajax+"home/getSpaceHolder");  
        }else{
         var dataString = 'madawa_kulevya='+ this.value;
          
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+"cro/getMadawaForm",  
                 data: dataString,  
                 success: function(data) { 
                    $('#dawa_space').html(data);
                 }  
                 });
                 return false;
        }
  });  
       
});




function toggleField(field) {
var myTarget = document.getElementById(field);
if(myTarget.style.display == 'none'){
  myTarget.style.display = 'block';
    } else {
  myTarget.style.display = 'none';
  myTarget.value = '';
}
}




    $('#add_mhusika').live('click',function(){
        var fname            = $('#fname_mhusika').val();
        var lname            = $('#lname_mhusika').val();
        var mname            = $('#mname_mhusika').val();
        var nick_name        = $('#nick_name').val();
        var address          = $('#address_mhusika').val();
        var paddress         = $('#paddress_mhusika').val();
        var bplace           = $('#birth_place_mhusika').val();
        var mobile           = $('#mobile_mhusika').val();
        var email            = $('#email_mhusika').val();  
        var religion_type    = $('#religion').val();
        var education_level  = $('#education').val();
        var marital_status   = $('#marital').val();
        var occupation_type  = $('#occupation').val();     
        var id_type          = $('#idtype').val();   
        var age_number       = $('#age').val();
        var gender           = $('#sex').val();
        var tribe_type       = $('#tribe').val();
        var uhusika_type     = $('#uhusika').val();
        var id_no            = $('#idno_mhusika').val();
        var nation           = $('#nationality').val(); 
        var offence          = $('#offence_no').val();
 
         if(uhusika_type == ''){
             alertify.alert('Chagua Uhusika wake!');
             return false;
         }
         if(fname == ''){
             alertify.alert('Jaza jina la Kwanza!');
             return false;
         }
         if(lname == ''){
             alertify.alert('Jaza jina la Mwisho!');
             return false;
         }
         if(address == ''){
             alertify.alert('Jaza Anuani!');
             return false;
         }
         if(paddress == ''){
             alertify.alert('Jaza Mahali Anapoishi!');
             return false;
         }
         if(bplace == ''){
             alertify.alert('Jaza Mahali Alipozaliwa!');
             return false;
         }
         if(religion_type == ''){
             alertify.alert('Chagua Dini yake!');
             return false;
         }
         if(education_level == ''){
             alertify.alert('Chagua Kiwango cha Elimu!');
             return false;
         }  
         if(marital_status == ''){
             alertify.alert('Chagua Hali ya Ndoa!');
             return false;
         }
         if(occupation_type == ''){
             alertify.alert('Chagua Kazi Afanyayo!');
             return false;
         }
         if(id_type == ''){
             alertify.alert('Chagua Aina ya Kitambulisho!');
             return false;
         }
         if(age_number == ''){
             alertify.alert('Chagua Umri wake!');
             return false;
         }
         if(gender == ''){
             alertify.alert('Chagua Jinsi yake!');
             return false;
         }
         if(tribe_type == ''){
             alertify.alert('Chagua Kabila!');
             return false;
         }

         if(id_no == ''){
             alertify.alert('Jaza Namba ya Kitambulisho!');
             return false;
         }
         if(nation == ''){
             alertify.alert('Chagua Utaifa wake!');
             return false;
         }

         
         
        var dataString = 'fname='+ fname + '&mname=' + mname + '&lname=' + lname + '&nick_name=' + nick_name + '&address=' + address +'&paddress' + paddress + '&bplace=' + bplace 
                +'&mobile=' + mobile + '&email=' + email + '&religion_type=' + religion_type + '&education_level=' + education_level 
                + '&marital_status=' + marital_status + '&occupation_type=' + occupation_type + '&id_type=' + id_type + '&age_number=' + age_number 
                + '&gender=' + gender + '&tribe_type=' + tribe_type + '&uhusika_type=' + uhusika_type + '&id_no=' + id_no + '&nation=' + nation + '&offence=' + offence;  
        
                //alert (dataString);return false; 
                $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+"cro/addMhusika",  
                 data: dataString,  
                 success: function(data) { 
                    $('#mhusika_space').html(data);
                 }  
               });
               
         $('#fname_mhusika').val('');
         $('#lname_mhusika').val('');
         $('#mname_mhusika').val('');
         $('#nick_name').val('');
         $('#address_mhusika').val('');
         $('#paddress_mhusika').val('');
         $('#birth_place_mhusika').val('');
         $('#mobile_mhusika').val('');
         $('#email_mhusika').val('');  
         $('#religion').val('');
         $('#education').val('');
         $('#marital').val('');
         $('#occupation').val('');     
         $('#idtype').val('');   
         $('#age').val('');
         $('#sex').val('');
         $('#tribe').val('');
         $('#uhusika').val('');
         $('#idno_mhusika').val('');
         $('#nationality').val(''); 
         $('#offence_no').val('');
         
         //$('#myModal').val('close');
         $('#myModal').modal('hide');
            return false; 
        });
        
        
        
   //Handle events when Option links on complainant display clicked

$(function(){
  $('li.wahusika_option').live('click',function(){
      var option = $(this).data('option');
      var data = $(this).data('id');
      var cls = '#'+data;
      var contrl = $('#controller').val();
      var dataString = 'wahusika_id='+ data;
      if(option == 'view_more'){
          //alert(contrl); return false;
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+contrl+"/viewMhusika",  
                 data: dataString,  
                 success: function(data) { 
                    $('#more').html(data);
                    $(cls).css('background-color', '#DFF0D8');
                    $("#more").css('background-color','#DFF0D8');
                    $(cls).siblings("div").css('background-color','#FFFFFF');
                 }  
                 });
                 
                 return false;
                 
      }
      else if(option == 'edit'){
          
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+contrl+"/editMhusika",  
                 data: dataString,  
                 success: function(data) { 
                    $('#more').html(data);
                    $(cls).css('background-color','#DFF0D8');
                    $("#more").css('background-color','#DFF0D8');
                    $('.error').css('display','none');
                    $(cls).siblings("div").css('background-color','#FFFFFF');
                    $("input#fname_edt").focus();  
                    
                    $( "#dob_edt" ).datepicker({
                        dateFormat: 'yy-mm-dd',
                        changeMonth: true,
                        changeYear: true,
                        rangeSelect: true,
                        minDate: new Date(1900, 10 - 1, 25), 
                        maxDate: new Date(1999,10 -1, 25),
                       
                           });
                 }  
                 });
          return false;
      }
      
  });  
       
});



//Editing Wahusika
 $('#edit_mhusika_button').live('click',function(){
        var controller       = $('#contrl').val();
        var fname            = $('#fname_mhusika_edt').val();
        var lname            = $('#lname_mhusika_edt').val();
        var mname            = $('#mname_mhusika_edt').val();
        var nick_name        = $('#nick_name_edt').val();
        var address          = $('#address_mhusika_edt').val();
        var paddress         = $('#paddress_mhusika_edt').val();
        var bplace           = $('#birth_place_mhusika_edt').val();
        var mobile           = $('#mobile_mhusika_edt').val();
        var email            = $('#email_mhusika_edt').val();  
        var religion_type    = $('#religion_edt').val();
        var education_level  = $('#education_edt').val();
        var marital_status   = $('#marital_edt').val();
        var occupation_type  = $('#occupation_edt').val();     
        var id_type          = $('#idtype_edt').val();   
        var age_number       = $('#age_edt').val();
        var gender           = $('#sex_edt').val();
        var tribe_type       = $('#tribe_edt').val();
        var uhusika_type     = $('#uhusika_edt').val();
        var id_no            = $('#idno_mhusika_edt').val();
        var nation           = $('#nationality_edt').val(); 
        var wahusika         = $('#wahusika_id').val();
        var offence          = $('#offence_no').val();
 
//         if(uhusika_type == ''){
//             alertify.alert('Chagua Uhusika wake!');
//             return false;
//         }
//         if(fname == ''){
//             alertify.alert('Jaza jina la Kwanza!');
//             return false;
//         }
//         if(lname == ''){
//             alertify.alert('Jaza jina la Mwisho!');
//             return false;
//         }
//         if(address == ''){
//             alertify.alert('Jaza Anuani!');
//             return false;
//         }
//         if(paddress == ''){
//             alertify.alert('Jaza Mahali Anapoishi!');
//             return false;
//         }
//         if(bplace == ''){
//             alertify.alert('Jaza Mahali Alipozaliwa!');
//             return false;
//         }
//         if(religion_type == ''){
//             alertify.alert('Chagua Dini yake!');
//             return false;
//         }
//         if(educativiewOnePubon_level == ''){
//             alertify.alert('Chagua Kiwango cha Elimu!');
//             return false;
//         }  
//         if(marital_status == ''){
//             alertify.alert('Chagua Hali ya Ndoa!');
//             return false;
//         }
//         if(occupation_type == ''){
//             alertify.alert('Chagua Kazi Afanyayo!');
//             return false;
//         }
//         if(id_type == ''){
//             alertify.alert('Chagua Aina ya Kitambulisho!');
//             return false;
//         }
//         if(age_number == ''){
//             alertify.alert('Chagua Umri wake!');
//             return false;
//         }
//         if(gender == ''){
//             alertify.alert('Chagua Jinsi yake!');
//             return false;
//         }
//         if(tribe_type == ''){
//             alertify.alert('Chagua Kabila!');
//             return false;
//         }
//
//         if(id_no == ''){
//             alertify.alert('Jaza Namba ya Kitambulisho!');
//             return false;
//         }
//         if(nation == ''){
//             alertify.alert('Chagua Utaifa wake!');
//             return false;
//         }

         
         
        var dataString = 'fname='+ fname + '&mname=' + mname + '&lname=' + lname + '&nick_name=' + nick_name + '&address=' + address +'&paddress' + paddress + '&bplace=' + bplace 
                +'&mobile=' + mobile + '&email=' + email + '&religion_type=' + religion_type + '&education_level=' + education_level 
                + '&marital_status=' + marital_status + '&occupation_type=' + occupation_type + '&id_type=' + id_type + '&age_number=' + age_number 
                + '&gender=' + gender + '&tribe_type=' + tribe_type + '&uhusika_type=' + uhusika_type + '&id_no=' + id_no + '&nation=' + nation + '&wahusika=' + wahusika +'&offence=' + offence;  
        
                //alert (dataString);return false; 
                $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+controller+"/editMhusikaDo",  
                 data: dataString,  
                 success: function(data) { 
                    $('#mhusika_space').html(data);
                 }  
               });
            return false; 
        });
        });      
        
$('#send_close a').live('click', function(e){
      var controller=$(this).attr('data-controller'); 
      var offence_no=$(this).attr('data-offence');
     
     
          $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+controller+"/checkcourtclosing",  
                 data: {offence_no:offence_no},  
                 success: function(data) { 
                    $('#courtclosing').html(data);
                    $('#courtclosing').show();
                 }  
               });
            
     return false;
});
$('#closingpolice').live('click', function(e){
      var controller=$('#controller').val(); 
      var offence_no=$('#offence_no').val();
     
      var description=$('#description').val();
      var courtid=$('#courtid').val();
      $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+controller+"/ClosingOffencePolice",  
                 data: {offence_no:offence_no,description:description,courtid:courtid},  
                 success: function(data) { 
                    $('#courtclosing').html(data);
                    $('#courtclosing').show();
                 }  
               });
     return false;
});

$('#closingcourt').live('click', function(e){
      var controller=$('#controller').val(); 
      var offence_no=$('#offence_no').val();
      var courtlevelid=$('#courtlevelid').val();
      
      $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+controller+"/ClosingOffenceCourt",  
                 data: {offence_no:offence_no,courtlevelid:courtlevelid},  
                 success: function(data) { 
                    $('#courtclosing').html(data);
                    $('#courtclosing').show();
                 }  
               });
     return false;
});




$("#upload-statement").live('click',function(e){
     var offence_no=$('#offence_no').val();
     var controller=$('#controller').val();
//     var file_source=$('#file_source').val();
//     alert(file_source);
//     exit();
     
    $.ajax({
        url: CI.base_url_ajax+controller+'/addStatement',
        data: function() {
                var data = new FormData();
                    data.append("chosenFile", $("#file_source").get(0).files[0]);
                    data.append('offence_no',offence_no);
                    return data;    
                    // Or simply return new FormData(jQuery("form")[0]);
                }(),
         contentType: false,
        processData: false,
        type: 'POST',
        success: function (data) {
            
         $("#statementshowupload").hide();
         $("#upload-statement").hide();
         $("#uploadedstatementshow").html(data);
         $("#uploadedstatementshow").show();

        }
    });

    return false;   
});




    $('#taarifa-btn').live('click',function(){
        var date_tukio       = $('#date').val();
        var title            = $('#taarifa_title').val();
        var content        = $('#taarifa_content').val();

 
         if(date_tukio == ''){
             alertify.alert('Tarehe ya Tukio ipo wazi!');
             return false;
         }

         if(title == ''){
             alertify.alert('Kichwa cha Taarifa kipo wazi!');
             return false;
         }
         if(content == ''){
             alertify.alert('Taarifa yenyewe ipo wazi!');
             return false;
         }
         
         
      });





    $('#add_mtoa_taarifa').live('click',function(){
        var fname            = $('#fname_mhusika').val();
        var lname            = $('#lname_mhusika').val();
        var mname            = $('#mname_mhusika').val();
        var nick_name        = $('#nick_name').val();
        var address          = $('#address_mhusika').val();
        var paddress         = $('#paddress_mhusika').val();
        var bplace           = $('#birth_place_mhusika').val();
        var mobile           = $('#mobile_mhusika').val();
        var email            = $('#email_mhusika').val();  
        var religion_type    = $('#religion').val();
        var education_level  = $('#education').val();
        var marital_status   = $('#marital').val();
        var occupation_type  = $('#occupation').val();     
        var id_type          = $('#idtype').val();   
        var age_number       = $('#age').val();
        var gender           = $('#sex').val();
        var tribe_type       = $('#tribe').val();
        var uhusika_type     = $('#uhusika').val();
        var id_no            = $('#idno_mhusika').val();
        var nation           = $('#nationality').val(); 
        var taarifa_no          = $('#taarifa_id').val();
 
         if(uhusika_type == ''){
             alertify.alert('Chagua Uhusika wake!');
             return false;
         }
         if(fname == ''){
             alertify.alert('Jaza jina la Kwanza!');
             return false;
         }
         if(lname == ''){
             alertify.alert('Jaza jina la Mwisho!');
             return false;
         }
//         if(address == ''){
//             alertify.alert('Jaza Anuani!');
//             return false;
//         }
         if(paddress == ''){
             alertify.alert('Jaza Mahali Anapoishi!');
             return false;
         }
         if(bplace == ''){
             alertify.alert('Jaza Mahali Alipozaliwa!');
             return false;
         }
         if(religion_type == ''){
             alertify.alert('Chagua Dini yake!');
             return false;
         }
         if(education_level == ''){
             alertify.alert('Chagua Kiwango cha Elimu!');
             return false;
         }  
         if(marital_status == ''){
             alertify.alert('Chagua Hali ya Ndoa!');
             return false;
         }
         if(occupation_type == ''){
             alertify.alert('Chagua Kazi Afanyayo!');
             return false;
         }
         if(id_type == ''){
             alertify.alert('Chagua Aina ya Kitambulisho!');
             return false;
         }
         if(age_number == ''){
             alertify.alert('Chagua Umri wake!');
             return false;
         }
         if(gender == ''){
             alertify.alert('Chagua Jinsi yake!');
             return false;
         }
         if(tribe_type == ''){
             alertify.alert('Chagua Kabila!');
             return false;
         }

//         if(id_no == ''){
//             alertify.alert('Jaza Namba ya Kitambulisho!');
//             return false;
//         }
         if(nation == ''){
             alertify.alert('Chagua Utaifa wake!');
             return false;
         }

         
         
        var dataString = 'fname='+ fname + '&mname=' + mname + '&lname=' + lname + '&nick_name=' + nick_name + '&address=' + address +'&paddress' + paddress + '&bplace=' + bplace 
                +'&mobile=' + mobile + '&email=' + email + '&religion_type=' + religion_type + '&education_level=' + education_level 
                + '&marital_status=' + marital_status + '&occupation_type=' + occupation_type + '&id_type=' + id_type + '&age_number=' + age_number 
                + '&gender=' + gender + '&tribe_type=' + tribe_type + '&uhusika_type=' + uhusika_type + '&id_no=' + id_no + '&nation=' + nation + '&taarifa_no=' + taarifa_no;  
        
                //alert (dataString);return false; 
                $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+"cro/addMtoaTaarifa",  
                 data: dataString,  
                 success: function(data) { 
                    $('#mtoa_taarifa_space').html(data);
                 }  
               });
               
         $('#fname_mhusika').val('');
         $('#lname_mhusika').val('');
         $('#mname_mhusika').val('');
         $('#nick_name').val('');
         $('#address_mhusika').val('');
         $('#paddress_mhusika').val('');
         $('#birth_place_mhusika').val('');
         $('#mobile_mhusika').val('');
         $('#email_mhusika').val('');  
         $('#religion').val('');
         $('#education').val('');
         $('#marital').val('');
         $('#occupation').val('');     
         $('#idtype').val('');   
         $('#age').val('');
         $('#sex').val('');
         $('#tribe').val('');
         $('#uhusika').val('');
         $('#idno_mhusika').val('');
         $('#nationality').val(''); 
         $('#taarifa_no').val('');
         
         //$('#myModal').val('close');
         $('#myModal').modal('hide');
            return false; 
        });
        
        
        
        //save discussion
        $('#disc-btn').live('click',function(){
        var receiver          = $('#receiver_id').val();
        var sender            = $('#sender_id').val();
        var controller_name   = $('#controller').val();
        var content           = $('#disc_content').val();
        var offence           = $('#offence_no').val();
                 if(receiver == ''){
                     alertify.alert('Chagua Mpokea ujumbe!');
                     return false;
                 }
                 if(content == ''){
                     alertify.alert('Andika ujumbe!');
                     return false;
                 }

                //alert (dataString);return false; 
                $.ajax({  
                 type: "POST",  
                 url:  CI.base_url_ajax+controller_name+"/saveDiscussion",  
                 data:{receiver:receiver,sender:sender,content:content,offence:offence},  
                 success: function(data) { 
                    $('#load_ajax_result').html(data);
                    $('#load_ajax_result').show();
                    $('#original').hide();
                    $('#receiver_id').val('');
                    $('#disc_content').val('');
                 }
                 
               });
               


            return false; 
        });
        