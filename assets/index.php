<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/form/app/controllers/processing.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="styles.css">
    <title>Форма обратной</title>
</head>
<body>
<div class="outer">
    <form id="myForm" method="post" action="index.php">
        <div class="header">
            <span class="authorisation">Форма обратной связи</span>
        </div>
        <p>
            <label for="fio">ФИО</label>
            <input type="text" name="fio" id="fio" required>
        </p>
        <p>
            <label for="email">E-Mail</label>
            <input type="text" name="email" id="email" required>
        </p>
        <p>
            <label for="msg">Сообщение</label>
            <textarea name="msg" id="msg" cols="20" rows="10"></textarea>
        </p>
        <p class="send">
            <button type="submit" value="Отправить" id="submit">Отправить</button>
        </p>
        <?php
        foreach (selectAll('users') as $key => $msg): ?>
            <div id="forName">
                <p class="name">Автор сообщения : <?= $msg['ФИО']; ?> </p>
            </div>
            <div id="formMessage">
                <p class="msg"><?= $msg['Сообщение']; ?></p>
            </div>
        <?php endforeach; ?>
    </form>
</div>
<script src="scripts.js"></script>
</body>
</html>

