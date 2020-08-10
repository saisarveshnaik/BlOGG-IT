$("#login").click(function(){

  var uname=$("#uname").val();
  var pass=$("#pass").val();

  var datastr='uname='+uname+'&pass='+pass;







  if ($("#uname").val().length==0 || $("#pass").val().length==0) {
   alert("Please fill username and password");
 }

 else{

   $.ajax({
    
    
    type: "POST",
    url: "login_GET.php",
    data: datastr,
    cache: false,
    success: function(res){
      if(res==20)
      {
        // window.location.href ="admin/production/index.php";
        alert("Admin login!");
        window.location.href ="index.php";
        
        
      }
      else if(res==23){
        
       
        alert("Welcome back!");

        window.location.href ="index.php";

        


      }
      
      else{
        alert("invalid login");
      }
      
    }
  }); 
 }
 





});