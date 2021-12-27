<?php

/*include "C:/Program Files/Ampps/www/form/app/db/func.php";*/
/*include "../db/func.php";*/

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/form/app/db/func.php";
include_once($path);




if (isset($_POST['fio'])){
    $name = $_POST['fio'];
    $email = $_POST['email'];
    $message = $_POST['msg'];

   $post =[
       'ФИО' => $name,
       'email' => $email,
       'Сообщение' => $message
   ];

   insert('users', $post);

}



