<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/form/app/db/func.php";
include_once($path);



if (!empty($_POST['fio']) && ($_POST['email']) && ($_POST['msg'])){
    $name = $_POST['fio'];
    $email = $_POST['email'];
    $message = $_POST['msg'];
    $post =[
        'ФИО' => $name,
        'email' => $email,
        'Сообщение' => $message
    ];
    insert('users', $post);
    tt($_POST);


}








