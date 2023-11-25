<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="NuTree Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        <?php include '/xampp/400004129/app/css/style.css'; ?>
    </style>
</head>



<body>
    <header class="header-dashboard">
        <p class='logo'>NuTree Group Of Researchers</p>
        <a class="logout" href="/logout">Logout</a>
    </header>
    <section class="login-details">
        <p><?php
            echo SessionManager::get("role")
            ?>: <span><?php
                        echo SessionManager::get("username")
                        ?></p></span></p>
        <p>Email: <?php
                    echo SessionManager::get("email")
                    ?></p>
    </section>


    <?php if (SessionManager::get("role") === 'Research Group Manager') : ?>
        <section class="role-actions">
            <a href="#">Create Study</a>
            <a href="#">View All Studies</a>
            <a href="#">Delete Previous Study</a>
            <a href="#">Create New Researchers</a>
        </section>
    <?php endif; ?>

    <?php if (SessionManager::get("role") === 'Research Study Manager') : ?>
        <section class="role-actions">
            <a href="#">Create Study</a>
            <a href="#">View All Studies</a>
            <a href="#">Delete Previous Study</a>
        </section>
    <?php endif; ?>


    <?php if (SessionManager::get("role") === 'Researcher') : ?>
        <section class="role-actions">
            <a href="#">View All Studies</a>
        </section>
    <?php endif; ?>

</body>
<footer>
    <p>Copyright &copy; "Akeem Smith". All Rights Reserved</p>
</footer>

</html>