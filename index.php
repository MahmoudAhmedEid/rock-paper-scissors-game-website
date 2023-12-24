<?php

$Username=$_REQUEST['Username'];
$Password=$_REQUEST['Password'];


if(isset($_POST['btn']))
{

    $host="localhost";
    $user="root";
    $Password="";
    $db="bissenior";

   $conn=mysqli_connect($host,$user,$Password,$db);

   $insert="insert into seniors values('$Username','$Password') ";
   mysqli_query($conn,$insert);
   if($conn)
   {
    header("Locationfile:///E:/Programs/New%20folder/htdocs/medo/rock%20paper%20scissors/index.html:");
    exit();
   }
   else{
    echo("<h1 style='color:red;'>your registration is failed! </h1>");
   }


}




?>