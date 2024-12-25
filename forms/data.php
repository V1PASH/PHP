<?php 
$name=$_POST["name"];
$number=$_POST['number'];
$class=$_POST['class'];

$host="localhost";
$admin="root";
$password="";
$db="prac";

$con= new mysqli($host,$admin,$password,$db);

$query= $con->prepare( "INSERT INTO data(name,number,class) VALUES(?,?,?)");
$query->bind_param('sss',$name,$number,$class);

if($query->execute())
{
    echo"done";
}

?>
