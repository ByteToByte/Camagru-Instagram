<?php

class Mail {

    public function sendMail($email, $token) {

        $to = $email;

        // тема письма
        $subject = 'Registration on CAMAGRU';

        //собираю из трех кусков свое сообщение
        $message1 = '
            <html>
            <head>
            <title>Registration on CAMAGRU</title>
            </head>
            <body>
            <p>If you want to finish registration on CAMAGRU and activate account</p>';
        $message2 = '<p>Copy this HASH - ' . $token . '</p>';

        //ОБЯЗАТЕЛЬНО ИЗМЕНИТЬ ЛОКАЛХОСТ или ДОБАВИТЬ ПОРТЫ ПОД СВОЙ СЕРВЕР
        $message3 = '
            <p>And click on this link <a href="http://localhost/view/activation.php">activate account</a>.</p>
            <p>If you not registered on site, please, ignoring this message.</p>
            </body>
            </html>';

        $message = $message1.$message2.$message3;

        // Для отправки HTML-письма должен быть установлен заголовок Content-type
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Отправляем
        mail($to, $subject, $message, $headers);
    }

    public function sendResetMail($email, $token) {

        $to = $email;

        // тема письма
        $subject = 'CAMAGRU. Reset password';

        //собираю из трех кусков свое сообщение
        $message1 = '
                    <html>
                    <head>
                    <title>Reset password</title>
                    </head>
                    <body>
                    <p>If you want to reset password on CAMAGRU</p>';
        $message2 = '<p>Copy this HASH - ' . $token . '</p>';

        //ОБЯЗАТЕЛЬНО ИЗМЕНИТЬ ЛОКАЛХОСТ или ДОБАВИТЬ ПОРТЫ ПОД СВОЙ СЕРВЕР
        $message3 = '<p>And click on this link <a href="http://localhost/view/newPass.php">reset password</a>.</p>
                    <p>If you not reset password, please, ignoring this message.</p>
                    </body>
                    </html>';
        $message = $message1 . $message2 . $message3;
                    
        // Для отправки HTML-письма должен быть установлен заголовок Content-type
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Отправляем
        mail($to, $subject, $message, $headers);
    }


    public function resetNameMail($email, $token) {

        $to = $email;

        // тема письма
        $subject = 'CAMAGRU. Change nickname';

        //собираю из трех кусков свое сообщение
        $message1 = '
                    <html>
                    <head>
                    <title>Change nickname</title>
                    </head>
                    <body>
                    <p>If you want to change nickname on CAMAGRU</p>';
        $message2 = '<p>Copy this HASH - ' . $token . '</p>';

        //ОБЯЗАТЕЛЬНО ИЗМЕНИТЬ ЛОКАЛХОСТ или ДОБАВИТЬ ПОРТЫ ПОД СВОЙ СЕРВЕР
        $message3 = '<p>And click on this link <a href="http://localhost/view/newNameCreate.php">change nickname</a>.</p>
                    <p>If you not change nickname, please, ignoring this message.</p>
                    </body>
                    </html>';
        $message = $message1 . $message2 . $message3;

        // Для отправки HTML-письма должен быть установлен заголовок Content-type
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Отправляем
        mail($to, $subject, $message, $headers);
    }


    public function resetEmailMail($email, $token) {

        $to = $email;

        // тема письма
        $subject = 'CAMAGRU. Change email';

        //собираю из трех кусков свое сообщение
        $message1 = '
                    <html>
                    <head>
                    <title>Change Email</title>
                    </head>
                    <body>
                    <p>If you want to change email on CAMAGRU</p>';
        $message2 = '<p>Copy this HASH - ' . $token . '</p>';

        //ОБЯЗАТЕЛЬНО ИЗМЕНИТЬ ЛОКАЛХОСТ или ДОБАВИТЬ ПОРТЫ ПОД СВОЙ СЕРВЕР
        $message3 = '<p>And click on this link <a href="http://localhost/view/newEmailCreate.php">change email</a>.</p>
                    <p>If you not change email, please, ignoring this message.</p>
                    </body>
                    </html>';
        $message = $message1 . $message2 . $message3;

        // Для отправки HTML-письма должен быть установлен заголовок Content-type
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Отправляем
        mail($to, $subject, $message, $headers);
    }


    public function likeMail($email) {

        $to = $email;

        // тема письма
        $subject = 'CAMAGRU. Your post has been liked!';

        //собираю из трех кусков свое сообщение
        $message = '
                    <html>
                    <head>
                    <title>Your post has been liked!</title>
                    </head>
                    <body>
                    <p>It is inform mail about new like</p>
                    <p>If you want get this message, please, turn off notification in options.</p>
                    </body>
                    </html>';
        // Для отправки HTML-письма должен быть установлен заголовок Content-type
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Отправляем
        mail($to, $subject, $message, $headers);
    }

    public function commentMail($email) {

        $to = $email;

        // тема письма
        $subject = 'CAMAGRU. Your post has new comment!';

        //собираю из трех кусков свое сообщение
        $message = '
                    <html>
                    <head>
                    <title>Your post has new comment!</title>
                    </head>
                    <body>
                    <p>It is inform mail about new comment</p>
                    <p>If you want get this message, please, turn off notification in options.</p>
                    </body>
                    </html>';
        // Для отправки HTML-письма должен быть установлен заголовок Content-type
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Отправляем
        mail($to, $subject, $message, $headers);
    }

    public function newNameMail($email) {

        $to = $email;

        // тема письма
        $subject = 'CAMAGRU. You changed nickname!';

        //собираю из трех кусков свое сообщение
        $message = '
                    <html>
                    <head>
                    <title>You changed nickname!</title>
                    </head>
                    <body>
                    <p>It is inform mail about change nickname!</p>
                    <p>If you want get this message, please, turn off notification in options.</p>
                    </body>
                    </html>';
        // Для отправки HTML-письма должен быть установлен заголовок Content-type
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Отправляем
        mail($to, $subject, $message, $headers);
    }
}
