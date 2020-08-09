$("#contactSubmit").click(function(){

  var msg_firstname=$("#msg_firstname").val();
  var msg_lastname=$("#msg_lastname").val();
  var msg_email=$("#msg_email").val();
  var msg_text=$("#msg_text").val();

  var datastr='msg_firstname='+msg_firstname+'&msg_lastname='+msg_lastname+'&msg_email='+msg_email+'&msg_text='+msg_text;






  if (msg_firstname=='') {
   alert("tell us your first name");

 }
 else if(msg_lastname==''){
  alert("Enter your last name");

}

else if (msg_email=='') {
 alert("Enter your email")
}

else if (msg_text=='') {
 alert("Please provide a message description")
}





else{

 $.ajax({


  type: "POST",
  url: "contact_us_GET.php",
  data: datastr,
  cache: false,
  success: function(res){
    if(res==1)
    {
      alert("Message Sent!");
      window.location.href="index.php";

    }
    else{


     alert("Error sending message!");


   }

 }
}); 
}






});




