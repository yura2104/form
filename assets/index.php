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


        <form id="myForm" method="post" action="index.php">
            <p >
             <label for="fio">ФИО</label>
             <input type="text" name="fio" id="fio" required>
         </p>

         <p >
             <label for="email">E-Mail</label>
             <input type="text" name="email" id="email"  required>
         </p>
         <p >
            <label for="msg">Сообщение</label>
            <textarea name="msg" id="msg" cols="20" rows="10"></textarea>
        </p>
        <p class="send" >
            <input type="submit" value="Отправить" id="submit" required>
        </p>

        <?php

        foreach (selectAll('users') as $key => $msg):?>
            <div id="formMassage">

                <p class="msg"><?=$msg['Сообщение'];?></p>

            </div>
        <?php endforeach; ?>



    </form>
    <script src="scripts.js"></script>



</body>
</html>

