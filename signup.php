<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    if(isset($_POST['signup'])){
        $name=$_POST['name'];
        $phno=$_POST['phno'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];

     $sql="insert into `users` 
      (name,phno,email,password) 
      values('$name','$phno','$email','$password')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($con));
        }
        /*$sql="Select * from `users` where name='$name'";
        $result=mysqli_query($con,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            //echo $num;
            if($num>0){
                echo "User already exist";
            }
            else{
                if($password===$cpassword){
                    $sql="insert into `users` (name,phno,email,password) values ('$name', $phno','$email','$password')";
                $result=mysqli_query($con,$sql);
                if($result){
                    echo "Signup successful";
                }
                }
                else{
                    echo "password did not match";
                }
            }

        }*/
    }
}

?>