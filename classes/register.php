<?php 
class register{

	private $con;
	public function __construct($con){
		$this->con = $con;
	}
	public function memberregister($id,$unitname ,$user_name,$sex, $year,  $enrollno,$user_email,$user_phone , $course ,$date,$password){
if(!empty($unitname)){
$query = mysqli_query($this->con,"INSERT INTO register VALUES ('','$unitname','$user_name','$sex',' $year','$enrollno',' $user_email','$user_phone ','$course','$date','$password')");
if(!$query){
	die("Failed".mysqli_error($this->con));
}
}else{
	return false; 
}
	

	}
}