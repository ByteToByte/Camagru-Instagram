<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Change nickname</title>
    <link href="../style/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="header">
        <p class="gradient">CAMAGRU</p>
    </div>
    <div class="content">
        <div class="main">
            <div id="form-messages"></div>
            <input placeholder="Enter your code" type="hash" id="hash" name="hash">
            <br>
            <input placeholder="Enter your email" type="email" id="email" name="email">
            <br>
            <input placeholder="Enter new nickname" type="username" id="username" name="username">
            <br>
            <button type="submit" id="btn-submit" value="newname">Update nickname</button>
        </div>
    </div>
    <div class="footer">
        <p class="gradient">&copy; Copyright<br>created by student School 21 - Mtytos</p>
    </div>
</div>
<script src="../script/newNameAjax.js"></script>
</body>
</html>