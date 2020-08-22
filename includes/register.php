
<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "unit";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if (!$con) {
  die("Could'nt connect to the database " . mysqli_error($con));
  }
   if (isset($_POST['btn_register '])) {

      $unitname = $_POST['unitname'];
      $user_name = $_POST['username'];
      $sex = $_POST['gender'];
      $year = $_POST['cyear'];
      $enrollno = $_POST['enrollno'];
      $user_email = $_POST['email'];
      $user_phone = $_POST['phone'];
      $course = $_POST['course'];
      $pwd=$_POST['password'];
      $date = date("d F Y");
     $password=md5($pwd);

    $query = "INSERT INTO register (unitname,username, sex,year, enrollment,user_email, user_phone, course, reg_date, pssword)  VALUES (' $unitname ','$user_name','$sex','  $year','  $enrollno',' $user_email','$user_phone ',' $course ','$date','$password')";
      mysqli_query($con,$query);
   
    }
 
?>






