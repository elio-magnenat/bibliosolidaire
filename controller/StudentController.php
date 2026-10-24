<?php
require_once  'model/StudentRepository.php';
require_once 'model/LoanRepository.php';
require_once 'model/ImageStorage.php';
// Classe pour le contrôleur des élèves
class StudentController extends Controller {
    // Fonction pour récupérer l'action et appeler la bonne fonction
    public function dispatch() {
        // Récupération de l'action
        $action = $_GET['action'];

        // Effectue un appel dynamique à la fonction en fonction de l'action
        return call_user_func((array($this, $action)));
    }
    public function listStudent(){
        $StudentRepository = new StudentRepository();
        $list = $StudentRepository->getStudents();
        ob_start();
        include 'view/page/student/listStudent.php';
        $content = ob_get_clean();
        return $content;
    }
    public function addFormStudent(){
        ob_start();
        include 'view/page/student/addFormStudent.php';
        $content = ob_get_clean();
        return $content;
    }
    public function addStudent() {
    $path_dir = "./ressources/img/student/";
    $imgPath = null;
    if (!empty($_POST['cropped_picture'])) {
        $imgPath = ImageStorage::saveCroppedJpeg($_POST['cropped_picture'], $path_dir, 'student_');
    }

    // Enregistrement
    $StudentRepository = new StudentRepository();
    $StudentRepository->addStudent(
        htmlspecialchars($_POST["lastname"]),
        htmlspecialchars($_POST["firstname"]),
        htmlspecialchars($_POST["birthdate"]),
        htmlspecialchars($_POST["institution"]),
        htmlspecialchars($_POST["entry_date"]),
        htmlspecialchars($_POST["validity_date"]),
        htmlspecialchars($_POST["phone"]),
        htmlspecialchars($_POST["comment"]),
        htmlspecialchars($_POST["address"]),
        $imgPath
    );
    $_SESSION['popup_message'] = "L'élève a bien été créé !";
    // Redirection
    header("Location: ?controller=student&action=listStudent");
}
    public function editFormStudent(){
        $StudentRepository = new StudentRepository();
        $id_student=$_GET['id'];
        $student = $StudentRepository->getStudent($id_student);
        ob_start();
        include 'view/page/student/editFormStudent.php';
        $content = ob_get_clean();
        return $content;
    }
    public function updateStudent() {
        $id_student = (int)$_GET['id'];
        $StudentRepository = new StudentRepository();
        $student = $StudentRepository->getStudent($id_student);
        $image_name = $student[0]['photo']; // Image actuelle
        $path_dir = "./ressources/img/student/";

        if (!is_dir($path_dir)) {
            mkdir($path_dir, 0755, true);
        }

        if (!empty($_POST['cropped_picture'])) {
            $new_image_name = ImageStorage::saveCroppedJpeg($_POST['cropped_picture'], $path_dir, 'student_');
            if (!empty($image_name)) {
                @unlink($path_dir . basename($image_name));
            }
            $image_name = $new_image_name;
        }

        $StudentRepository->updateStudent(
            $id_student,
            htmlspecialchars($_POST["lastname"]),
            htmlspecialchars($_POST["firstname"]),
            htmlspecialchars($_POST["birthdate"]),
            htmlspecialchars($_POST["institution"]),
            htmlspecialchars($_POST["entry_date"]),
            htmlspecialchars($_POST["validity_date"]),
            htmlspecialchars($_POST["phone"]),
            htmlspecialchars($_POST["comment"]),
            htmlspecialchars($_POST["address"]),
            $image_name
        );
        $_SESSION['popup_message'] = "L'élève a bien été modifié !";
        header("Location: ?controller=student&action=listStudent");
    }

    public function detailStudent() {
        $StudentRepository = new StudentRepository();
        $id_student=$_GET['id'];
        $student = $StudentRepository->getStudent($id_student);
        $LoanRepository = new LoanRepository();
        $loans = $LoanRepository->getStudentLoans($id_student);
        ob_start();
        include 'view/page/student/detailStudent.php';
        $content = ob_get_clean();
        return $content;
    }
    public function removeStudent() {
        $StudentRepository = new StudentRepository();
        $id_student=$_GET['id'];
        $student = $StudentRepository->removeStudent($id_student);
        $_SESSION['popup_message'] = "L'élève a bien été supprimé !";
        header("Location: ?controller=student&action=listStudent");
    }
}
?>