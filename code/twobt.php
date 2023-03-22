<?php
//2.b
session_start();
if (!empty($_SESSION)) {
    echo 'Имя ',$_SESSION['name'];
   echo' Фамилия ',$_SESSION['sername'] ;
    echo' Возраст ',$_SESSION['age'];


}


?>

