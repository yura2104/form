<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/form/app/controllers/processing.php";
include_once($path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="styles.css">
    <title>Форма обратной</title>
</head>
<body>
<div class="container">
    <form id="myForm" >
        <p class="name">
            <label>
                <input type="text" name="fio" required>
            </label>
            <label >ФИО</label>
        </p>

        <p class="email">
            <label>
                <input type="text" name="email"  required>
            </label>
            <label >E-Mail</label>
        </p>
        <p class="msg">
            <label>
                <textarea name="msg" cols="20" rows="10"></textarea>
            </label>
            <label >Сообщение</label>
        </p>
        <p class="send" >
            <input type="submit" value="Отправить" required>
        </p>

        <?php

        foreach (selectAll('users') as $key => $msg):?>
            <div id="formMassage">
                <p><?=$msg['Сообщение'];?> </p>
            </div>
        <?php endforeach;?>

    </form>
    <script src="scripts.js"></script>
</div>

</body>
</html>

