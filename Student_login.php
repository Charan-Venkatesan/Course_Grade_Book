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

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container">
        <h3 class="w3-padding-64"><b>Welcome to<br>CourseGradebook</b></h3>
    </div>
    <div class="w3-bar-block">
        <a href="home.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
        <a href="signup.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">SignUp/Register</a>
        <a href="Instructor_login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Login</a>
        <a href="coursesphp.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Courses</a>
       
        <a href="contact.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
    </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
    <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
    <header>

        <nav>
            <ul id="top_nav">
                <li><a href="index.html"><img src="images/home.png" alt="Call Us" title="Home" height="30px" width="30px" ></a></li>
                <li><a href="#"><img src="images/call.png" alt="Call Us" title="Call Us" height="30px" width="30px" ></a></li>
                <li><a href="#"><img src="images/mail.jpg" alt="Mail Us" title="Mail Us" height="30px" width="30px"></a></li>
                <li><a href="http://www.facebook.com"><img src="images/fb.png" alt="Facebook" title="Facebook" height="30px" width="30px"></a></li>
                <li><a href="http://www.twitter.com"><img src="images/twitter.png" alt="Twitter" title="Twitter" height="30px" width="30px"></a></li>
                <li><a href="http://www.instagram.com"><img src="images/insta.png" alt="Instagram" title="Instagram" height="30px" width="30px"></a></li>

            </ul>
        </nav>
        <nav>

        </nav>
    </header>
    <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Contact -->
    <div class="w3-container" id="contact" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-black"><b>Student login.</b></h1>
        <hr style="width:50px;border:5px solid w3-text-black" class="w3-round">
        <p>Welcome to Course Gradebook !</p>
        <form action="coursesstudent.php" method="post" target="_blank">
            <div class="w3-section">
                <label>Student UserName</label>
                <input class="w3-input w3-border" type="text" name="username" required>
            </div>
            <div class="w3-section">
                <label>Password</label>
                <input class="w3-input w3-border" type="password" name="password" required>
            </div>
            <button type="submit"  name="submit" class="w3-button w3-block w3-padding-large w3-blue w3-margin-bottom">Submit </button>
        <a href="">Forgot password?</a>
        </form>
        <a href="signup.html" target="_blank">Sign Up</a>
                <a href="forgotPassword.php" class="pull-right" target="_blank">Forgot Password</a>

    </div>

    <!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
    <footer class="w3-center">
        <p class="w3-right">Powered by <a href="https://www.CourseGradebook.com/home.html" title="CourseGradebook.com" target="_blank" class="w3-hover-opacity">CouresGradebook</a></p>

    </footer>
</div>
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

</body>
</html>
<?php


error_reporting(0);
session_start();
$servername="localhost";
$username="root";
$password="";
$data="course_gradebook";
$last_id=0;
$error="";
$num_rows=0;
$conn=new mysqli($servername, $username, $password,$data);

if($conn->connect_error){
    die("Connection failed" .$conn->connect_error);
}


if(isset($_POST['submit'])) {

    $email=$_POST['username'];
    echo($_POST['username']);

    $pass=$_POST['password'];
    echo($_POST['password']);

    
    $myusername = mysqli_real_escape_string($conn,$_POST['username']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']);


    $sql = "SELECT Username FROM students WHERE Username = '$myusername' and Password = '$mypassword'"; 
    $result = mysqli_query($conn,$sql);
 
    if ($result=mysqli_query($conn,$sql))
    {
    
        
        $rowcount=mysqli_num_rows($result);
       try{
        if($rowcount==1){
           


            ?>
           
          <script>window.location.href = "coursesstudent.php";</script>

          <?php
       
        }
        else{

           
            throw new Exception('Unique records not found');
            header('Location: Student_login.php');
        }

    }catch (Exception $ex){
        echo 'Error: ' .$ex->getMessage();
    }

        
        mysqli_free_result($result);


    }
   
}



?>