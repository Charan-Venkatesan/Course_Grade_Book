<!DOCTYPE html>
<html lang="en">
<title>CourseGradebook</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="Styling.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Welcome to<br>CourseGradebook</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="home.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="signup.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">SignUp/Register</a> 
    
    <a href="coursesphp.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Courses</a> 
   
    <a href="contact.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>



<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Contact -->

   <center> <h1 class="w3-xxxlarge w3-text-black"><b>Home Page.</b></h1></center>

    <form action="/action_page.php" target="_blank">
      <div class="w3-section">

    <div style="clear:both;">&nbsp;</div>
           <div style="clear:both;">&nbsp;</div>
           <div style="clear:both;">&nbsp;</div>
          
    <div class="home_container">
       <div><img src="image1.jpg"></div> 
          </div>
     <div style="clear:both;">&nbsp;</div>
           <div style="clear:both;">&nbsp;</div>
       
    <div class="column" id="home_cen1">
       
                <a href="Student_login.php">Student Login<a/>
            </div>
                  
             <div class="column">
                
              <a href="Instructor_login.php">Instructor Login<a/>
            </div>
        <div style="clear:both;">&nbsp;</div>
     <center>    
         
    
    
    </center> 
    
    


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->


 <div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
    <footer class="w3-center">
      <p class="w3-right">Powered by <a href="https://www.CourseGradebook.com/home.html" title="CourseGradebook.com" target="_blank" class="w3-hover-opacity">CouresGradebook</a></p>
      
      </footer>


<!--
<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
-->
</body>
</html>