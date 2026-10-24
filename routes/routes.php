<?php
include_once __DIR__ . '/../controller/Controller.php';
include_once __DIR__ . '/../controller/BookController.php';
include_once __DIR__ . '/../controller/StudentController.php';
include_once __DIR__ . '/../controller/LoanController.php';

class RoutesController {
    public function dispatch() {
        $allowed = [
            'book' => ['listBook', 'addFormBook', 'addBook', 'editFormBook', 'updateBook', 'detailBook', 'removeBook', 'reinstate'],
            'student' => ['listStudent', 'addFormStudent', 'addStudent', 'editFormStudent', 'updateStudent', 'detailStudent', 'removeStudent'],
            'loan' => ['loanFormBook', 'newLoan', 'restoreFormBook', 'closeLoan'],
        ];
        $controller = $_GET['controller'] ?? 'book';
        $action = $_GET['action'] ?? 'listBook';
        if (!is_string($controller) || !is_string($action) || !isset($allowed[$controller]) || !in_array($action, $allowed[$controller], true)) {
            http_response_code(404);
            exit('Page not found');
        }
        $_GET['action'] = $action;
        switch ($controller) {
            case 'book': return new BookController();
            case 'student': return new StudentController();
            case 'loan': return new LoanController();
        }
    }
}
