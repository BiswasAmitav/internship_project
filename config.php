<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';


$conn=mysqli_connect($server,$username,$password,$database);

if($conn->connect_errno){
    die("Connection failed : ".$conn->connect_errno);
}
echo"";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];


    $sql="INSERT INTO 'users'('Name','email','password','phone_no') VALUES ($name,$email,$password,$number)"
    if(mysqli_query($conn,$sql)){
        echo"Records inserted successfully.";
    }
    else{
        echo"Error: Couid not able to execute $sql. ". mysqli_error($conn);
    }

?>