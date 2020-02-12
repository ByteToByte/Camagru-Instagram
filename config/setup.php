<?php

$DB_DSN = 'mysql:host=127.0.0.1;dbname=mysql';
$DB_USER = 'root';
$DB_PASSWORD = '';

try {
    $db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Successfully connected to the database - mysql";
    echo "<br>";

    // создаю базу данных camagru 
    try {
        $sql = "CREATE DATABASE IF NOT EXISTS camagru";
        $db->exec($sql);
        echo "Successfully created database - camagru";
        echo "<br>";
    }
    catch (PDOException $e) {
        echo "Creating database camagru FAILED" . $e->getMessage();
        echo "<br>";
    }

    // создаю таблицу пользователей users
    try {
        $sql = "USE camagru";
        $db->exec($sql);
        $sql = "CREATE TABLE IF NOT EXISTS users (id_user INT NOT NULL AUTO_INCREMENT, username VARCHAR(30) NOT NULL, email VARCHAR(60) NOT NULL, password TEXT NOT NULL, status INT, token TEXT NOT NULL, like_alert INT, comment_alert INT, profile_alert INT, PRIMARY KEY (id_user))";
        $db->exec($sql);
        echo "Successfully created table - users";
        echo "<br>";
    }
    catch (PDOException $e) {
        echo "Creating table users FAILED" . $e->getMessage();
        echo "<br>";
    }

    // создаю таблицу постов posts
    try {
        $sql = "USE camagru";
        $db->exec($sql);
        $sql = "CREATE TABLE IF NOT EXISTS posts (id_post INT NOT NULL AUTO_INCREMENT, username VARCHAR(30) NOT NULL, PRIMARY KEY (id_post))";
        $db->exec($sql);
        echo "Successfully created table - posts";
        echo "<br>";
    }
    catch (PDOException $e) {
        echo "Creating table posts FAILED" . $e->getMessage();
        echo "<br>";
    }

    // создаю таблицу лайков likes
    try {
        $sql = "USE camagru";
        $db->exec($sql);
        $sql = "CREATE TABLE IF NOT EXISTS likes (id_like INT NOT NULL AUTO_INCREMENT, username VARCHAR(30) NOT NULL, PRIMARY KEY (id_like))";
        $db->exec($sql);
        echo "Successfully created table - likes";
        echo "<br>";
    }
    catch (PDOException $e) {
        echo "Creating table likes FAILED" . $e->getMessage();
        echo "<br>";
    }

    // создаю таблицу комментариев comments
    try {
        $sql = "USE camagru";
        $db->exec($sql);
        $sql = "CREATE TABLE IF NOT EXISTS comments (id_comment INT NOT NULL AUTO_INCREMENT, username VARCHAR(30) NOT NULL, PRIMARY KEY (id_comment))";
        $db->exec($sql);
        echo "Successfully created table - comments";
        echo "<br>";
    }
    catch (PDOException $e) {
        echo "Creating table comments FAILED" . $e->getMessage();
        echo "<br>";
    }
}
catch (PDOException $e) {
    echo "Creating or re-creating the database schema FAILED" . $e->getMessage();
    echo "<br>";
}

?>