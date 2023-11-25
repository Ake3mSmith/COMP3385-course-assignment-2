<?php

use app\Router;

require '/xampp/400004129/autoloader.php';
SessionManager::startSession();
class UserLoginController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function loginUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fv = new FormValidator();
            if ($fv->isValidEmail($_POST['emailinput']) === false) {
                SessionManager::set("loginError", "Invalid Email Format");

                $r = new Router();
                $r->back();
            } elseif ($this->model->getUserAndPassword($_POST['emailinput'], $_POST["passwordinput"]) === false) {
                SessionManager::set("loginError", "Incorrect Email and/or Password");

                $r = new Router();
                $r->back();
            } else {
                SessionManager::set("role", $this->model->getRole());
                SessionManager::set("email", $this->model->getEmail());
                SessionManager::set("username", $this->model->getUserName());

                require '/xampp/400004129/app/views/dashboard-view.php';
            }
        }
    }
}
$obj1 = new UserLoginController();
$obj1->loginUser();
