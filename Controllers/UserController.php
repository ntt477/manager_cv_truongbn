<?php
require_once('Model/Model.php');
require_once('Core/AuthLogin.php');
require_once('Model/User.php');
require_once('Model/Employer.php');
class UserController extends Model
{

    public function index()
    {
        $email = AuthLogin::getUser('email')['email'];
        $inforUpdate = new User();
        $inforUpdates = $inforUpdate->find($email);
        foreach ($inforUpdates as $id) {
            foreach ($id as $employerId) {
                $_SESSION['id'] = $employerId;
            }
        }
        $candidate = new User();
        $candidate->createCandidate($_POST);

        $job = new Employer();
        $data = $job->getJob();

        require('View/User/homepage/index.php');
    }

    public function cv()
    {
        require('View/User/homepage/cv.php');
    }

    public function updateCv()
    {
        $inforUpdate = new User();
        $infor = $inforUpdate->updateInfor($_GET['user_id'], [$_POST['user_name'], $_POST['email'], $_POST['phone_number'], $_POST['degree'], $_POST['experience']]);
        $skillUpdate = new User();
        $skill = $skillUpdate->updateSkill([$_POST['user_id'], $_POST['name_skill'], $_POST['role']]);

        if (isset($_FILES['upload']['name'])) {
            $name = $_FILES['upload']['name'];
            $error = $_FILES['upload']['error'];
            $tmpName = $_FILES['upload']['tmp_name']; //abc.tmp ==> abc.txt||abc.pdf
            //1: Folder tồn tại ==> Upload thẳng vào luôn
            if (!file_exists('uploads')) {
                mkdir('uploads'); //make directory
            }
            //
            //2: Chưa tạo => tạo folder mới ==> upload lên đó.

            $extensions = ['pdf', 'doc', 'docx'];
            $extension = pathinfo($name, PATHINFO_EXTENSION);

            if (!in_array($extension, $extensions)) {
                $_SERVER['errImg'] = "File sai định dang vui lòng upload lại";
            } else {
                if ($error == UPLOAD_ERR_OK) {
                    move_uploaded_file($tmpName, 'uploads/' . $name);
                }
            }
        }
        $fileUpdate = new User();
        $file = $fileUpdate->updateFile([$_POST['user_id'], $_POST['title'], $_FILES['upload']['name']]);
        require('View/User/homepage/cv.php');
    }

    public function cvDetail()
    {
        $email = AuthLogin::getUser('email')['email'];
        $inforUpdate = new User();
        $inforUpdates = $inforUpdate->find($email);
        foreach ($inforUpdates as $id) {
            foreach ($id as $employerId) {
                $_SESSION['id'] = $employerId;
            }
        }
        $getCv = $inforUpdate->getCv($_SESSION['id']);

        if (isset($_GET['cv_id'])) {
            $inforUpdate->updateStatusCv($_GET['cv_id']);
        }
        require('View/User/homepage/cv_detail.php');
    }

    public function viewPdf()
    {
        require('View/User/homepage/viewPdf.php');
    }

    public function searchJob()
    {

        $inforUpdate = new User();
        if (empty($_POST)) {
        } else {
            $data = $inforUpdate->searchJob($_POST);
        }
        require('View/User/homepage/searchJob.php');
    }
}
