<?php
include('conexion.php');

$email = $_POST['email'];

if(empty($email)){

    echo '3';

}else{

    $insertData = ("INSERT INTO dbemails (email) VALUES ('".$email."')");

    $ejecutar = mysqli_query($con, $insertData);
}

if($ejecutar){

    echo '1';

}else{
    
    echo '2';
}



mysqli_close($con);

?>