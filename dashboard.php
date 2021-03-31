<?php
session_start();
$email_address= $_SESSION['email'];
include('config/database.php');
include('partials/sidebar.php'); 
include('partials/header.php');
if(empty($email_address))
{
  header("location:index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--custom style-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">


</head>
<body>

 

<div class="container-fluid">
  
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script type="text/javascript" src="scripts/ajax-script.js">
  
</script>
<script type="text/javascript">
  var acontent = document.querySelectorAll('.accordion-content');
var atitle = document.querySelectorAll('.accordion-content .title');
for (i = 0; i < atitle.length; i++) {
        
    atitle[i].onclick=function(){
        
        var contentClass = this.parentNode.className;
        
        for (i = 0; i < acontent.length; i++) {
            acontent[i].className = 'accordion-content hide';
         }
        
        if (contentClass == 'accordion-content hide') {
            this.parentNode.className = 'accordion-content show';
        }
   }
}
</script>

<script>
// Add the following code if you want the name of the file appear on select
$(document).on("change", ".custom-file-input", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<script
    type="text/javascript"
    src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js'
    referrerpolicy="origin">
  </script>
  <script type="text/javascript">

  tinymce.init({
    selector: 'textarea',
    height: 300,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullpage | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | spellchecker | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'
  });


  $(document).ready(function(){
    $('body').find('.tox-notifications-container').hide();
  })
  </script>
</body>
</html>