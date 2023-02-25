<?php 
require_once('Model/Model.php');
require_once('Model/Employer.php');
require_once('Model/User.php');

    class AdminController extends Model {
        public function index() {
            $infor = new User();
            $data = $infor->getInformation();

            if(isset($_GET['userId'])){
               $data= $infor->delete($_GET['userId']);
               if(!empty($data)){
                header('location: admin/admin/index');
               }
            }
            require ('View/Admin/dashboard/index.php');
        }


    public function createUser() {
        $infor = new User();
        if(empty($_POST)){
        }else{
            $infor->createNewUser($_POST);
            header('location: index');
        }
        require ('View/Admin/dashboard/createUser.php');
    }

    public function fixUser(){
        $dataNew = new User();

        $result = $dataNew->getAll($_GET['userId']);

        require ('View/Admin/dashboard/fixUser.php');
    }

    public function updateNewUser()
    {
        $data = new User();
        $result = $data->update($_GET['userId'], $_POST);
        if (empty($result)) {
            header('location: index');
        }
        require ('View/Admin/dashboard/fixUser.php');
    }

    public function post()
    {   $job = new Employer();
        $data= $job->getJob();

        if(isset($_GET['cvId'])){
            $data= $job->delete($_GET['cvId']);
            if(!empty($data)){
             header('location: admin/admin/post');
            }
         }
        require ('View/Admin/dashboard/post.php');
    }

    }