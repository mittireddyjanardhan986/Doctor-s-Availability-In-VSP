<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    if(isset($_POST['login'])){
        $name=$_POST['name'];
        $password=$_POST['password'];

        $sql="select * from `users` where name = '$name' && password ='$password' " ;
        $result=mysqli_query($con,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                echo "Login successful";
                $_SESSION['username']=$username;
                header('location:primedoc.php');
            }
            else{
                echo "Invalid credentials";
            }
        }
    }
}

?>