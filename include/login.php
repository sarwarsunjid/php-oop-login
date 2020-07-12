<?php
session_start();
	include 'user.php';

	if (isset($_REQUEST['login'])) {
        $user = new User();
		extract($_REQUEST);
	    $login = $user->login($username, $password);
	    if ($login) {
	        // Login Success
	       header("location: ../home.php");
        exit();
	    } else {
	        // Login Failed
	        //echo 'Wrong username or password';
            $_SESSION['message'] = '<div class="alert alert-danger">
            <strong>Invalid Login!</strong> Wrong username or password!
        </div>';
    	   header('location: ../index.php');
		exit();
	    }
	}
?>