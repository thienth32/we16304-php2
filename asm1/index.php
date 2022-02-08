<?php
require_once './commons/helpers.php';
require_once './vendor/autoload.php';

use App\Controllers\QuizController;
use App\Controllers\SubjectController;

$url = isset($_GET['url']) ? $_GET['url'] : "/";
// $url mong muốn của người gửi request
switch ($url) {
    case 'login':
        break;
    case 'dashboard':
        break;
    case 'mon-hoc':
        $ctr = new SubjectController();
        $ctr->index();
        break;
    case 'mon-hoc/tao-moi':
        $ctr = new SubjectController();
        $ctr->addForm();
        break;
    case 'mon-hoc/luu-tao-moi':
        $ctr = new SubjectController();
        $ctr->saveAdd();
        break;
    case 'mon-hoc/cap-nhat':
        $ctr = new SubjectController();
        $ctr->editForm();
        break;
    case 'mon-hoc/luu-cap-nhat':
        $ctr = new SubjectController();
        $ctr->saveEdit();
        break;
    case 'mon-hoc/xoa':
        $ctr = new SubjectController();
        $ctr->remove();
        break;
    case 'mon-hoc/chi-tiet':
        break;
    case 'quiz':
        $ctr = new QuizController();
        $ctr->index();
        break;
    case 'quiz/tao-moi':
        $ctr = new QuizController();
        $ctr->addForm();
        break;
    case 'quiz/save-add':
        $ctr = new QuizController();
        $ctr->saveAdd();
        break;
    case 'quiz/cap-nhat':
        $ctr = new QuizController();
        $ctr->editForm();
        break;
    case 'quiz/luu-cap-nhat':
        break;
    case 'quiz/xoa':
        break;
    case 'quiz/lam-bai':
        break;
    default:
        echo "Đường dẫn bạn đang truy cập chưa được cho phép";
        break;
}


?>