<?php
require_once './commons/helpers.php';
require_once './vendor/autoload.php';

$url = isset($_GET['url']) ? $_GET['url'] : "/";

use App\Controllers\SubjectController;
use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

// định nghĩa ra url mới
$router->group(['prefix' => 'mon-hoc'], function($router){
    $router->get(['/', 'subject.index'], [SubjectController::class, 'index']);
    $router->get('tao-moi', [SubjectController::class, 'addForm']);
    $router->post('tao-moi', [SubjectController::class, 'saveAdd']);
});



$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
// Print out the value returned from the dispatched function
echo $response;


// phroute
// illumiate/database - thay base model
// illuminate/events

// jenssergers/blade - view

// $url mong muốn của người gửi request
// switch ($url) {
//     case 'login':
//         break;
//     case 'dashboard':
//         break;
//     case 'mon-hoc':
//         $ctr = new SubjectController();
//         $ctr->index();
//         break;
//     case 'mon-hoc/tao-moi':
//         $ctr = new SubjectController();
//         $ctr->addForm();
//         break;
//     case 'mon-hoc/luu-tao-moi':
//         $ctr = new SubjectController();
//         $ctr->saveAdd();
//         break;
//     case 'mon-hoc/cap-nhat':
//         $ctr = new SubjectController();
//         $ctr->editForm();
//         break;
//     case 'mon-hoc/luu-cap-nhat':
//         $ctr = new SubjectController();
//         $ctr->saveEdit();
//         break;
//     case 'mon-hoc/xoa':
//         $ctr = new SubjectController();
//         $ctr->remove();
//         break;
//     case 'mon-hoc/chi-tiet':
//         break;
//     case 'quiz':
//         $ctr = new QuizController();
//         $ctr->index();
//         break;
//     case 'quiz/tao-moi':
//         $ctr = new QuizController();
//         $ctr->addForm();
//         break;
//     case 'quiz/save-add':
//         $ctr = new QuizController();
//         $ctr->saveAdd();
//         break;
//     case 'quiz/cap-nhat':
//         $ctr = new QuizController();
//         $ctr->editForm();
//         break;
//     case 'quiz/luu-cap-nhat':
//         break;
//     case 'quiz/xoa':
//         break;
//     case 'quiz/lam-bai':
//         break;
//     default:
//         echo "Đường dẫn bạn đang truy cập chưa được cho phép";
//         break;
// }


?>