<?php
include '/xampp/400004129/autoloader.php';
SessionManager::destroySession();
header('Location:/login');
