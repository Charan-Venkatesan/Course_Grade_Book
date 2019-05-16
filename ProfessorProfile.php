<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "course_gradebook";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
  echo "Connected";
}

?>


<!DOCTYPE HTML>
<html>
<title>CourseGradebook</title>
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
<head>
    <link rel = "stylesheet" href = "Professor.css">
</head>
<body><!--
  <nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Welcome to<br>CourseGradebook</b></h3>
  </div>
  <div class="w3-bar-block">
    
    <a href="ProfessorPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Courses</a> 
    <a href="ProfessorPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">User Profile</a> 
    <a href="Instructor_login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a> 
    </div>
    </nav>-->
    <div class="w3-main" style="margin-left:340px;margin-right:40px">
    <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-black"><b>Welcome to your profile</b></h1>
      <form method="post" action="ProfessorProfile.php">
        <div class="w3-section">
            <label> First Name</label>
            <input class="w3-input w3-border" type="text" name="first_name" required>
        </div>
        <div class="w3-section">
            <label> Last Name</label>
            <input class="w3-input w3-border" type="text" name="last_name" required>
        </div>      
        <div class="w3-section">
            <label> Office Address</label>
            <input class="w3-input w3-border" type="text" name="office_address" required>
        </div>
        <div class="w3-section">
            <label> Office Hours</label>
            <input class="w3-input w3-border" type="text" name="office_hours" required>
        </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="email" required>
      </div>
      <div class="w3-section">
        <label>Password</label>
        <!--<input class="w3-input w3-border" type="password" name="pass" required>-->
        <input type="password" name="password" value="" autocomplete="off" class="w3-input w3-border" />
      </div>
     
      <input type="submit" name="save" value="Save" class="w3-input w3-border" />
      <br>
      <input type="reset" name="Reset" value="Reset" class="w3-input w3-border" />
     
    </form>
    </div> 
</div>
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.CourseGradebook.com/home.html" title="CourseGradebook.com" target="_blank" class="w3-hover-opacity">CouresGradebook</a></p></div>
</body>
</html>

<?php
/*
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$office_address = filter_input(INPUT_POST, 'office_address');
$office_hours = filter_input(INPUT_POST, 'office_hours');
$email = filter_input(INPUT_POST, 'email');
$passWord = filter_input(INPUT_POST, 'passWord');

/* PASSWORD VALIDATION:
------------------------
1. Password must have at least 8 characters
2. Password must have a minimum of 1 uppercase character
3. Password must have a minimum of 1 digit (number)
4. Password must contains some lower cases characters 
*/
//$pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/'; 

//if(preg_match($pattern, passWord)){
//$passWord = filter_input(INPUT_POST, 'passWord');
//}else{
//    echo "Enter a strong password";
//}

/*
if(!empty($first_name) || !empty($last_name) || !empty($office_address) || !empty($office_hours) || !empty($email) || !empty($passWord)){
    
    error_reporting(0);
    session_start();
    $servername="localhost:8080";
    $username="root";
    $password="";
    $data="course_gradebook";
   // $last_id=0;
    $error="";
    $num_rows=0;
    $conn=new mysqli($servername, $username, $password,$data);

    if($conn->connect_error){
        die("Connection failed" .$conn->connect_error);
    }else{
        $sql = "INSERT INTO instructor_profile(first_name, last_name, office_address, office_hours, email, password) 
        values ('$first_name', '$last_name', '$office_address', '$office_hours', '$email', '$passWord')"; // Check what are been inserted to make sure they match what are in the database.

        if($conn->query($sql)){
        echo "Profile is updated successfully";
        }
    else{
            echo "Error: ". $sql ."<br>". $conn->error;
        }
        $conn->close();
    }

}else{
    echo "All fields are required.";
    die();
}
*/
if(isset($_POST['save'])){




  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $office_address=$_POST['office_address'];
  $office_hours=$_POST['office_hours'];
  $email=$_POST['email'];
  $passwor=$_POST['password'];
  var_dump($passwor);
 
 $sql = "INSERT INTO instructor_profile(first_name, last_name, office_address, office_hours, email, password) 
        values ('$first_name', '$last_name', '$office_address', '$office_hours', '$email', '$passwor')"; 


var_dump($sql);
//$result=mysqli_query($conn,$sql);


    $result=mysqli_query($conn,$sql);
//$result = $conn->query($sql);
var_dump($result);


if($result) {
    echo $success="New record created successfully";
} else {
    echo $failure="Data not inserted".mysqli_error($conn);
}

}


?>