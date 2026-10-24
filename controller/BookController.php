<?php
require_once 'model/BookRepository.php';
require_once 'model/LoanRepository.php';
require_once 'model/ImageStorage.php';
// Classe pour le contrôleur des livres
class BookController extends Controller {
    // Fonction pour récupérer l'action et appeler la bonne fonction
    public function dispatch() {
        // Récupération de l'action
        $action = $_GET['action'];

        // Effectue un appel dynamique à la fonction en fonction de l'action
        return call_user_func((array($this, $action)));
    }

    public function listBook(){
        $BookRepository = new BookRepository();
        $LoanRepository = new LoanRepository();
        $loans = $LoanRepository->getLoans();
        foreach($loans as $loan){
            if($loan['return_date']== NULL && strtotime($loan['expected_return_date']) < time()){
                    $BookRepository->updateStatus($loan['fk_book'],3);
            }
        }
        $list = $BookRepository->getBooks();
        ob_start();
        include 'view/page/book/listBook.php';
        $content = ob_get_clean();
        return $content;
    }
    public function addFormBook(){
        $BookRepository = new BookRepository();
        $categories = $BookRepository->getCategories();
        ob_start();
        include 'view/page/book/addFormBook.php';
        $content = ob_get_clean();
        return $content;
    }
    public function addBook() {
        $image_name = "";
        $path_dir = "./ressources/img/book/";

        if (!empty($_POST['cropped_picture'])) {
            $image_name = ImageStorage::saveCroppedJpeg($_POST['cropped_picture'], $path_dir, 'book_');
        }

        $BookRepository = new BookRepository();
        $BookRepository->addBook(
            htmlspecialchars($_POST["title"]),
            htmlspecialchars($_POST["author"]),
            htmlspecialchars($_POST["edition"]),
            htmlspecialchars($_POST["reference"]),
            htmlspecialchars($_POST["location"]),
            htmlspecialchars($_POST["comment"]),
            htmlspecialchars($image_name),
            htmlspecialchars($_POST["category"]),
            1
        );
        $_SESSION['popup_message'] = "Le livre ".$_POST["title"]." a bien été ajouté !";
        header("Location: ?controller=book&action=listBook");
    }


    public function editFormBook(){
        $BookRepository = new BookRepository();
        $id_book=$_GET['id'];
        $book = $BookRepository->getBook($id_book);
        $categories = $BookRepository->getCategories();
        ob_start();
        include 'view/page/book/editFormBook.php';
        $content = ob_get_clean();
        return $content;
    }
    public function updateBook() {
        $id_book = (int)$_GET['id'];
        $BookRepository = new BookRepository();
        $book = $BookRepository->getBook($id_book);
        $image_name = $book[0]['photo']; // Image actuelle
        $status = $book[0]['id_status'];
        $path_dir = "./ressources/img/book/";

        // Replace only validated JPEGs.
        if (!empty($_POST['cropped_picture'])) {
            $new_image_name = ImageStorage::saveCroppedJpeg($_POST['cropped_picture'], $path_dir, 'book_');
            if (!empty($image_name)) {
                @unlink($path_dir . basename($image_name));
            }
            $image_name = $new_image_name;
        }

        // Retrait ou remise en rayon
        if (isset($_POST['removeBook']) && $_POST['removeBook'] == 'on') {
            $status = 4;
        } elseif ($status == 4) {
            $status = 1;
        }

        $BookRepository->updateBook(
            $id_book,
            htmlspecialchars($_POST["title"]),
            htmlspecialchars($_POST["author"]),
            htmlspecialchars($_POST["edition"]),
            htmlspecialchars($_POST["reference"]),
            htmlspecialchars($_POST["location"]),
            htmlspecialchars($_POST["comment"]),
            $image_name,
            htmlspecialchars($_POST["category"]),
            $status
        );
        $_SESSION['popup_message'] = "Le livre a bien été modifié !";
        header("Location: ?controller=book&action=listBook");
    }

    public function detailBook() {
        $BookRepository = new BookRepository();
        $id_book=$_GET['id'];
        $book = $BookRepository->getBook($id_book);
        $LoanRepository = new LoanRepository();
        $loans = $LoanRepository->getBookLoans($id_book);
        ob_start();
        include 'view/page/book/detailBook.php';
        $content = ob_get_clean();
        return $content;
    }
    public function removeBook() {
        $BookRepository = new BookRepository();
        $id_book=$_GET['id'];
        $BookRepository->removeBook($id_book);
        $_SESSION['popup_message'] = "Le livre a bien été suprrimé !";
        header("Location: ?controller=book&action=listBook");
    }
    public function reinstate() {
        $id_book=htmlspecialchars($_GET['id']);
        $BookRepository = new BookRepository();
        $BookRepository->updateStatus($id_book, 1);
        $_SESSION['popup_message'] = "Le livre a bien été modifié !";
        header("Location: ?controller=book&action=listBook");
    }
}
?>