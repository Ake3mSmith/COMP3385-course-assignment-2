<?php
include_once '/xampp/400004129/framework/sessionmanager/sessionManager.php';
include_once '/xampp/400004129/framework/formmaker/formMaker.php';
SessionManager::startSession();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Login</title>
    <meta name="description" content="NuTree Login">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        <?php include '/xampp/400004129/app/css/style.css'; ?>
    </style>
</head>

<body>
    <header>
        <p class='logo'>NuTree Group Of Researchers</p>
    </header>
    <section class="input-container">
        <p class='form-title'>Login</p>
        <?php formMaker::start('POST', '/userdashboard', ''); ?>
        <p class="error"><?php
                            if (SessionManager::isset('loginError')) {
                                echo SessionManager::get('loginError');
                                SessionManager::unset('loginError');
                            }
                            ?></p>
        <?php
        formMaker::label('email', '', '', 'Enter your email:');
        formMaker::textbox('', '', 'emailinput', 'Enter email');
        formMaker::label('password', '', '', 'Enter your password:');
        formMaker::password('', '', 'passwordinput', 'Enter password');
        formMaker::submitButton('action-button', '', '', 'Log In');
        formMaker::end();
        ?>
    </section>

    <footer>
        <p>Copyright &copy; "Akeem Smith". All Rights Reserved</p>
    </footer>
</body>

</body>

</html>