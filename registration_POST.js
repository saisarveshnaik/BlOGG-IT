$("#formsubmit").click(function(){

  var user_name=$("#user_name").val();
  var user_address=$("#user_address").val();
  var user_cont=$("#user_cont").val();
  var user_email=$("#user_email").val();
  var username=$("#username").val();
  var password=$("#password").val();
  var profile_pic=$("#image1").val();
  var gender=$("#gender").val();

  var datastr='user_name='+user_name+'&user_address='+user_address+'&user_cont='+user_cont+'&user_email='+user_email+'&username='+username+'&password='+password+'&profile_pic='+profile_pic+'&gender='+gender;


  if (user_name=='') {
   alert("Please fill full name");

 }

 else if (user_address=='') {
   alert("Please fill address")
 }
 else if (user_cont=='') {
   alert("Please fill contact number");
 }
 else if (user_email=='') {
  alert("Please provide an email");
}
else if (username=='') {

  alert("Please fill username");
}
else if (password=='') {
  alert("Please choose a password");
}
else if (gender=='') {
 alert("Please choose your gender");
}

else{

 $.ajax({


  type: "POST",
  url: "registration_GET.php",
  data: datastr,
  cache: false,
  success: function(res){
    if(res==1)
    {
      alert("Registration success!");

    }
    else{


     alert("error");


   }

 }
}); 
}






});




