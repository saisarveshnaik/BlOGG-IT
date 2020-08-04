$("#blogsubmit").click(function(){

  var blog_pic=$("#image1").val();
  var blog_category=$("#blog_category").val();
  var blog_title=$("#blog_title").val();
  var blog_desc=$("#blog_desc").val();
  

  var datastr='blog_pic='+blog_pic+'&blog_category='+blog_category+'&blog_title='+blog_title+'&blog_desc='+blog_desc;






if (blog_category=='') {
   alert("Please select a category");

 }

 else if (blog_title=='') {
   alert("Please fill blog title")
 }
 else if (blog_desc=='') {
   alert("Please fill blog description");



 }
 

else{

 $.ajax({


  type: "POST",
  url: "add_blogs_GET.php",
  data: datastr,
  cache: false,
  success: function(res){
    if(res==1)
    {
      alert("Blog Posted!");
      window.location.href="index.php";

    }
    else{


     alert("error");


   }

 }
}); 
}






});




