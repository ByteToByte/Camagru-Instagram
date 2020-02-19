<?php
session_start();

$DB_DSN = 'mysql:host=127.0.0.1;dbname=camagru';
$DB_USER = 'root';
$DB_PASSWORD = '';

try {
    $db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Successfully connected to the database - ajax";
//    echo "<br>";
} catch (PDOException $e) {
//    echo "Creating or re-creating the database schema FAILED" . $e->getMessage();
//    echo "<br>";
}

if ($_POST['btnCommentSend']) {

    $username = $_SESSION['logged'];
    $st = $db->prepare("SELECT id_user FROM users WHERE username = ?");
    $st->bindParam(1, $username);
    $st->execute();
    $usernameDB = $st->fetchColumn();

    $table = $_POST['btnCommentSend'] . '.comment';
    $comment = htmlspecialchars($_POST['commentText']);

    if ($comment != "") {
        $st = $db->prepare("INSERT INTO `$table` (id_user, comment) VALUES(?, ?)");
        $st->bindParam(1, $usernameDB);
        $st->bindParam(2, $comment);
        $st->execute();

        $checkUser = explode('.', $table);
        $userToBD = $checkUser[1];

        $st = $db->prepare("SELECT comment_alert FROM users WHERE id_user = ?");
        $st->bindParam(1, $userToBD);
        $st->execute();
        $commentAlert = $st->fetchColumn();

        if ($commentAlert == 1) {

            $st = $db->prepare("SELECT email FROM users WHERE id_user = ?");
            $st->bindParam(1, $userToBD);
            $st->execute();
            $emailAlert = $st->fetchColumn();

            require_once 'Mail.php';
            $action = new Mail;
            $action->commentMail($emailAlert);
        }
    }

}

if ($_POST['deleteComment']) {

    $tmp = explode(".", $_POST['deleteComment']);
    $idDel = $tmp[0];
    unset($tmp[0]);
    $table = implode(".", $tmp);

    $st = $db->prepare("DELETE FROM `$table` WHERE id_comment = :id_comment");
    $st->bindParam(':id_comment', $idDel);
    $st->execute();
}

header('Location: http://localhost/Camagru/view/gallery.php');
exit;