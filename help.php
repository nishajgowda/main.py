<?php
$email= filter_input(INPUT_POST,'E-MAIL');
$text= filter_input(INPUT_POST,'text');

//create connection

$conn=new mysqli($host,$dbemail,$dbtext,$dbname);
if(mysqli_connect_error()){
die('connect error('.mysqli_connect_error().')'
.mysqli_connect_error());
}
else{
$sql = "INSERT INTO register (email,text)
       values ('$Email','rtext')";
       if ($conn->query($sql)){
       echo "new record is inserted succesfully";
       }
       else{
       echo "error:". $sql ."<br>".$conn->error;
       }
       $conn->close();
}
?>