<?php
    include "db.php";
    class User extends Database{ 
            //For Login Process
            public function login($username, $password){
                
                $password = md5($password);
                $sql="SELECT * from users WHERE username='$username' and password='$password'";
                //checking if the username is available in the table
                $result    = $this->con->query($sql);
                $user_data = $result->fetch_assoc();
                $count_row = $result->num_rows;
                if ($count_row == 1) {
                    // this login variable will be used for session
                    $_SESSION['login'] = true;
                    $_SESSION['id'] = $user_data['id'];
                    return true;
                }
                else{
                    return false;
                }
            }
            //For Registration Process
            public function register($username, $email, $password) {
                $password = md5($password);
                $sql="SELECT * FROM users WHERE username='$username' OR email='$email'";

                //checking if the username or email is available in db
                $check = $this->con->query($sql);
                $count_row = $check->num_rows;

                //if the username is not in db then insert to the table
                if ($count_row == 0){
                    $sql="INSERT INTO users SET username='$username', email='$email', password='$password'";
                    $result = $this->con->query($sql);
                    return $result;
                }
                else {
                    return false;
                 }
            }
            //For getting username
            public function get_name($id){
                
                $sql="SELECT username FROM users WHERE id = $id";
                $result = $this->con->query($sql);
                $user_data = $result->fetch_assoc();
                echo $user_data['username'];
            }

            //For Starting session
            public function get_session(){
                
                return $_SESSION['login'];
            }
            //For User logout
            public function user_logout(){
                
                $_SESSION['login'] = FALSE;
                session_destroy();
            }

        }    
    
?>