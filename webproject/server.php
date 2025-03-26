<?php
session_start();

$username="";
$email="";
$errors="";


$db=mysqli_connect('localhost','root','','blog');


//extracting the values from the input fields
if(isset($_POST['contact'])){
    $fullname=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $phonenumber=$_POST['phonenumber'];
    $message=$_POST['message'];




    if(count($errors)==0){
        $query="INSERT INTO users(fullname,email,subject,phone,message) VALUES('$fullname','$email','$subject','$phonenumber','$message')";
        $insert_query=mysqli_query($db,$query);
        if($insert_query){
            header('location:contact.php?success');
        }else{
            array_push($errors,"cannot insert into database due to some error.")
        }
    }
}




