<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8;', 'root', '');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST" action="">
<div class="text_div">
    <div class="title_div">
        <label for="title">Title:</label><br>
        <input type="text" name="title" id="title" autocomplete="off"><br>
    </div>

    <div class="textarea_div">
        <label for="text_area">Text:</label><br>
        <textarea name="description"></textarea>
    </div>

    <div class="submit_div">
        <button type="submit" name="send">Send</button>
    </div>
</div>
</body>
</html>