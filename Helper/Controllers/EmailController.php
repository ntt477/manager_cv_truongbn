<?php
require_once('Model/Model.php');
require_once('Core/AuthLogin.php');
require_once('Model/User.php');
require_once('Model/Employer.php');

class Login_Controller {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function login(){
        $email = AuthLogin::getUser('email')['email'];
        $auth = md5(uniqid());
        $to = "truongbn@thefirstone.jp";
        $subject = "Xác thực tài khoản";
        $message = "Vui lòng nhấp vào đường dẫn sau để xác nhận tài khoản:  http://example.com/auth.php?code='.$auth ";
        if(isset($email)){
            mail($to, $subject, $message);
        }
    }

    public function authenticate($auth) {
        // Xác minh mã xác thực
        if ($this->model->remove_authcode($auth)) {
            // Đánh dấu người dùng là đã xác thực
            $this->model->update_user($_SESSION['username'], array('is_authenticated' => true));
    
        } 
}
}

      
    
       