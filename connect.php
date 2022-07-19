<?php
$nname= filter_input(INPUT_POST,'NAME');
$email= filter_input(INPUT_POST,'E-MAIL');
$password= filter_input(INPUT_POST,'PASSWORD');


//create connection

$conn=new mysqli($host,$dbnname,$dbemail,$dbpassword,$dbname);
if(mysqli_connect_error()){
die('connect error('.mysqli_connect_error().')'
.mysqli_connect_error());
}
else{
$sql = "INSERT INTO register (nname,email,password)
       values ('$NAME','$Email','password')";
       if ($conn->query($sql)){
       echo "new record is inserted succesfully";
       }
       else{
       echo "error:". $sql ."<br>".$conn->error;
       }
       $conn->close();
}
}
else{ "password should not be empty";
die();
}
else{ "name should not be empty";
die();
}
?>