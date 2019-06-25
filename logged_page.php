<?php 
session_start();
$con = mysqli_connect('localhost', 'root', '', 'insertdata');
	if(isset($_POST['Login'])){
		$user =$_POST['user'];
		$pass =$_POST['pass'];
		$sql="SELECT email,password  FROM users";
		$result=$con->query($sql);
		while ($data=$result->fetch_assoc()) {
			$m=$data['email'];
			$p=$data['password'];
			if ($user===$m AND $pass===$p) {
				header("location:Logged.php");
		}
		else{
			echo "
				<div class = 'alert-danger'>
					<strong>Check your email and Password</strong>
				</div>
			";
		} 
	}
  }
 ?>