$(document).ready(function(){
$("#predict").click(function(){
   var boy_name=$("#boy").val();
   var girl_name=$("#girl").val();
   if(boy_name=="" || girl_name==""){
    swal("Oops!", "Complete All Fileds!", "warning");
   }
   else{
       $.ajax({
         url:"flames.php",
         type:"post",
         async:false,
         data:{
             'boy':boy_name,
             'girl':girl_name
         },
         success:function(data){
            swal("Great!", data, "success");
         }
       });
   }
});
});