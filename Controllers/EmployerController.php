<?php
require_once('Model/Model.php');
require_once('Model/Employer.php');
require_once('Helper/AuthRequest.php');
require_once('Core/AuthLogin.php');
require_once('Model/User.php');
class EmployerController extends Model
{

    public function index()
    {
        $inforUpdate = new Employer();
        if (empty($_POST)) {
        } else {
            $data = $inforUpdate->searchCv($_POST);
        }
        require('View/Employer/index.php');
    }

    public function postJob()
    {
        $infor = new User();
        $email = AuthLogin::getUser('email')['email'];
        $data = $infor->getInfor($email);

        $inforUpdate = new User();
        $inforUpdate = $infor->find($email);
        foreach ($inforUpdate as $id) {
            foreach ($id as $employerId) {
                $_SESSION['id'] = $employerId;
            }
        }
        $authRequest = new AuthRequest();
        $_SESSION['error'] = $authRequest->validatePost($_POST);
        if (empty($_SESSION['error'])) {
            $post = new Employer();
            $posts = $post->createJob($_POST);
        }
        require('View/Employer/postJob.php');
    }

    public function candidate()
    {
        $infor = new User();
        $email = AuthLogin::getUser('email')['email'];
        $data = $infor->getInfor($email);
        $inforUpdate = $infor->find($email);
        foreach ($inforUpdate as $id) {
            foreach ($id as $employerId) {
            }
        }

        $cv = new Employer();
        $data = $cv->getCv($_GET['employer_id']);
        /// hàm trừ tiền
      
        require('View/Employer/candidate.php');
    }

    public function aboutMe()
    {
        $infor = new User();
        $email = AuthLogin::getUser('email')['email'];
        $data = $infor->getInfor($email);

        $inforUpdate = new User();
        $inforUpdate = $infor->find($email);
        foreach ($inforUpdate as $id) {
            foreach ($id as $employerId) {
                $_SESSION['id'] = $employerId;
            }
        }
        require('View/Employer/about_me.php');
    }

    public function formUpdate()
    {
        $dataNew = new User();
        $result = $dataNew->getAll($_GET['employer_id']);
        require('View/Employer/update_infor.php');
    }

    public function updateInfor()
    {
        $data = new User();
        $result = $data->update($_GET['employer_id'], $_POST);
        if (empty($result)) {
            header('location: aboutMe');
        }
        require('View/Employer/update_infor.php');
    }

    public function historyJob()
    {   $cv = new Employer();
        $data= $cv->deduction($_GET['user_id']);
        if(empty($data)){
            $url = url('employer/candidate');
            header('location: '.$url);
        }
        require('View/Employer/historyJob.php');
    }

    public function cv_detail()
    {

        require('View/Employer/cv_detail.php');
    }

    public function money()
    {   $infor = new User();
        $email = AuthLogin::getUser('email')['email'];
        $data = $infor->getInfor($email);

        $inforUpdate = new User();
        $inforUpdate = $infor->find($email);
        foreach ($inforUpdate as $id) {
            foreach ($id as $employerId) {
                $_SESSION['id'] = $employerId;
            }
        }
        if(empty($_POST)){
            
        }else{
            $money = new Employer();
            $money->insertMoney($_POST);
        }
        

        $amount = new Employer();
        $data = $amount->getAmount($_SESSION['id']);

        require('View/Employer/money.php');
    }
}
