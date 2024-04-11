<?php 
	include('server.php');
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql="SELECT * FROM signin WHERE username='$username'";
		$result = mysqli_query($connection , $sql);
		if($result === false) {
			die('error executing query:' . mysqli_error($connection));
		}
		$count_user = mysqli_num_rows($result);
		
		if($count_user === 0){
			if($password){
				$hash = password_hash($password, PASSWORD_DEFAULT);
				$sql = "INSERT INTO signin(username , password) VALUES('$username', $hash')";
				$result = mysqli_query($connection, $sql);
				if($result){
					header("location: login.php");
				}
			}
			else{
				echo '<script>
					alert("passwords do not match")
					window.location.href = "login.php"
				</script>';
			}
		}
		else{
			if($count_user>0){
				echo '<script>
					window.location.href="login.php";
					alert("username already exists!!");
				</script>';
			}
		}
	}
	
?>