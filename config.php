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


    $sql="INSERT INTO 'users'('Name','email','password','phone_no') VALUES ($name,$email,$password,$number)";
    if(mysqli_query($conn,$sql)){
        echo"Records inserted successfully.";
    }
    else{
        echo"Error: Couid not able to execute $sql. ". mysqli_error($conn);
    }
}

session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE 'email'='$email' AND 'password'='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_fetch_row($result)==1){
        header("location: index.php");
    }
    else{
        $error="email id or password is incorrect";
    }
}


if(isset($_POST['submit'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $sql="INSERT INTO 'jobs'('cname','position','Jdesc','skills','CTC') VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";


    if(mysqli_query($conn,$sql)){
        echo"New job Posted";
    }
    else{
        echo"Error: Couid not able to execute $sql. ". mysqli_error($conn);
        echo"failed to post the job ";
    }


}


mysqli_close($conn);


if(isset($_POST['apply'])){
    $name=$_POST['name'];
    $name=$_POST['qual'];
    $name=$_POST['apply'];
    $name=$_POST['year'];

    $sql="INSERT INTO `candidates`(`name`,`apply`,`qual`,`year`) VALUES('$name','$apply','$qual','$year')";
    mysqli_query($conn,$sql);

    var_dump($sql);
    die();
    mysqli_query($conn,$sql);

}   



?>