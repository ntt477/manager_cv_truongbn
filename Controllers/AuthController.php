<?php
require_once('Helper/AuthRequest.php');
require_once('Model/Model.php');
require_once('Model/Auth.php');
require_once('Core/AuthLogin.php');
class AuthController
{

    public function login()
    {
        require('View/Auth/login.php');
    }

    public function register()
    {
        require('View/Auth/register.php');
    }

    public function handleRegister()
    {
        $authRequest = new AuthRequest();
        $_SESSION['error'] = $authRequest->validateRegister($_POST);
        if (empty($_SESSION['error'])) {
            $create = new Auth();
            $data = $create->createAccount($_POST);
            if($data){
                header('location:login');
            }
        }
        require('View/Auth/register.php');
    }

    public function handleLogin()
    {
        $authRequest = new AuthRequest();
        $_SESSION['error'] = $authRequest->validateLogin($_POST);
        $_SESSION['email'] = $_POST['email'];
        if (empty($_SESSION['error'])) {
            $account = new Auth();
            $user = $account->firstUser($_POST);
            if ($user) {
                AuthLogin::setUser('email', $user, true);
                $url = url('user/index'); // Lấy URL của trang user/index.php
                header("Location: $url"); // Chuyển hướng đến trang tương ứng
            }

            $employer = $account->firstEmploy($_POST);
            if ($employer) {
                AuthLogin::setUser('email', $employer, true);
                $url = url('employer/aboutMe'); // Lấy URL của trang user/index.php
                header("Location: $url"); // Chuyển hướng đến trang tương ứng
            }
        }
        require('View/Auth/login.php');
    }


    
}
