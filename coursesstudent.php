<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
    body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
    body {font-size:16px;}
    .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
    .w3-half img:hover{opacity:1}
</style>

<body>
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container">
        <h3 class="w3-padding-64"><b>Welcome to<br>CourseGradebook</b></h3>
    </div>
    <div class="w3-bar-block">
        <a href="coursesstudent.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">View Student Grades</a>
        <a href="Student_profile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Update Profile</a>
        <a href="Student_login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a>
        
    </div>
</nav>

    <div style="clear:both;">&nbsp;</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
<div align="center">
<h1>Spring 2019</h1>
<table style="width:50%">
  <tr>
    <th>Course_id</th>
    <th>Course_name</th> 
    <th>Grade</th>
  </tr>
  <tr>
    <td align="center">CSE 5381</td>
    <td align="center">Info Sec 1</td> 
    <td align="center">A</td>
  </tr>
  <tr>
    <td align="center">CSE 5382</td>
    <td align="center">Secure programming</td> 
    <td align="center">A</td>
  </tr>
<tr>
    <td align="center">CSE 6363</td>
    <td align="center">Machine learning</td> 
    <td align="center">A</td>
  </tr>
</table>
    </div></div>
    
    <div style="clear:both;">&nbsp;</div>
    <div style="clear:both;">&nbsp;</div>
    <div style="clear:both;">&nbsp;</div>
    <div style="clear:both;">&nbsp;</div>
    <div style="clear:both;">&nbsp;</div>
    <div style="clear:both;">&nbsp;</div>
   <div style="clear:both;">&nbsp;</div>
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
    <footer class="w3-center">
      <p class="w3-right">Powered by <a href="https://www.CourseGradebook.com/home.html" title="CourseGradebook.com" target="_blank" class="w3-hover-opacity">CouresGradebook</a></p>
      
      </footer>
    </div>

</body>
</html>

