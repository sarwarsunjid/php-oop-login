<?php  
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login and Registration with PHP OOP Using Mysql Database</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>
<body>
    <div id="login">
        <h3 class="text-center text-white mt-2">Registration form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="register-box" class="col-md-12">
                        <!--Registration Form Start-->
                        <form id="login-form" class="form" action="include/registration.php" method="post">
                            <h3 class="text-center text-info">Registration</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="username" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                
                                <input type="submit" name="submit" class="btn btn-primary btn-md" value="register">
                                <a href="index.php" class="text-info">Already Registered!<b>Click Here To Login</b> </a>
                            </div>
                        </form>
                        <!--Registration Form End-->
                    </div>
                    <?php
                      if(isset($_SESSION['message'])){
                    ?>
                        <div class="alert alert-info text-center">
                                <?php echo $_SESSION['message']; ?>
                            </div>
                    <?php
                         unset($_SESSION['message']);
                        }
                    ?>	
                </div>    
            </div>
        </div>
    </div>
</body>
</html>
