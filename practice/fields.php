<!DOCTYPE html>
<html>
	<head>
		<title>Password</title>
	</head>
	
	<body>
	
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
	    <input type="text" name="name" placeholder="Name" />		
	    <input type="password" name="password" placeholder="Password" />		
	    <input type="password" name="password1" placeholder="Confirm Password" />		
		<!--<input type="email" name="email" placeholder="Email" />-->
		<input type="submit" name="login" value="Login" />		
	</form>
	
	</body>
</html>

<?php 

include("db/connect.php");

if(isset($_POST['login'])){
	
	//variables
	$name = $_POST['name'];
	$pass = $_POST['password'];
	$pass1 = $_POST['password1'];
	
	//Create Hash of Password	
	$pass_hash = password_hash("$pass", PASSWORD_BCRYPT);
	
	if($name === '' || $pass === '' || $pass1 === ''){
		echo "Form Cannot Be Empty!!!";
	}else{
		if(strlen($name) > 20 || strlen($name) < 5){
				echo "Name must be between 5-20 chars!!!";
			}else{
				if (!preg_match("/^[A-Za-z ]*$/",$name)){
					echo"Name cannot have Numbers and spaces!!!";
				}else{
					if (strlen($pass) < 8 || strlen($pass) > 25){
					echo"Password must be 8-25 chars!!!";
				}else{
							if(password_verify($pass1, $pass_hash)){	
						//Insert Data
						$insert_data = "INSERT into pasword VALUES ('','$name','$pass_hash')";
							// Check Insert
							if($connect->query($insert_data) ===  TRUE){
								//Success
								echo "Record Inserted Success!!!";
							}else{
								//Invalid
								echo "Record Not Inserted!!!";
								}
									}else{
										//Fail
										echo "Password Do not match!!!!";
										}
					
				}//4th else
				}//3rd else
				}//2nd else
	}//1st else
	
	
	
}//main end brackt




?>