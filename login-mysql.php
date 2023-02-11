<?php  
	$user_name= $_POST['user_name'];
	$user_pass= $_POST['user_pass'];

	include 'mysql_connect.php';
	
	$query= " SELECT * FROM `login_student` ";
	$result= mysqli_query($conn, $query);
	$flag= 0;
	while ($row= mysqli_fetch_assoc($result)) {
		if ($row['username'] == $user_name and $row['password'] == $user_pass) {
			$flag = 1;
		}
	}
	if ($flag == 1) {
		// echo "Login success";
		header('Location: login-data.php?correct=t');
	} 
	else{
		// echo "Invalid username and password";
		header('Location: login-data.php?incorrect=f');
	}
	mysqli_close($conn);
?>