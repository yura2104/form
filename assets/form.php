<?php

include "../app/controllers/processing.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Форма обратной</title>
</head>
<body>
<div id="container">
    <form class="mainform"  method="post" action="form.php">
        <p class="name">
            <label>
                <input type="text" name="fio" />
            </label>
            <label >ФИО</label>
        </p>

        <p class="email">
            <label>
                <input type="text" name="email"  />
            </label>
            <label >E-Mail</label>
        </p>
        <p class="msg">
            <label>
                <textarea name="msg"></textarea>
            </label>
            <label >Сообщение</label>
        </p>
        <p class="send" >
            <input type="submit" value="Отправить"  />
        </p>
    </form>
</div>
</body>
</html>

