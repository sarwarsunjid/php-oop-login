<?php 
	session_start(); 
	include 'user.php';
	$user = new User(); // Checki for user logged in or not
	if (isset($_REQUEST['submit'])){
	extract($_REQUEST);
	$register = $user->register($username, $email, $password);
	if ($register) {
	// Registration Success
	// echo 'Registration successful <a href="login.php">Click here</a> to login';
        
        $_SESSION['message'] = '<div class="alert alert-success">
        <strong>Registration Successfull!</strong> <a href="index.php">Click here</a> to login.
        </div>';
        header("location: ../index.php");
		exit();

	} else {
	// Registration Failed
	// echo 'Registration failed. Email or Username already exits please try again';
        $_SESSION['message'] = '<div class="alert alert-danger">
        <strong>Registration Failed!</strong> Username or Email already exists!
        </div>';
		header("location: ../register.php");
		exit();
	}
	}
?>