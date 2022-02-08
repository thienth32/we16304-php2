<?php
namespace App\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;

class QuizController{
    public function index(){
        // 1. lấy id của môn học
        $sid = $_GET['subjectId'];
        $subject = Subject::where(['id', '=', $sid])->first();
        if(empty($subject)){
            header("location: " . BASE_URL);
            die;
        }

        // 2. lấy danh sách quiz của môn học đó ra
        $subjectQuizs = Quiz::where(['subject_id', '=', $subject->id])->get();

        include_once './app/views/quiz/index.php';
    }

    public function addForm(){
        $subjectId = $_GET['subjectId'];
        include_once './app/views/quiz/add-form.php';
    }

    public function saveAdd()
    {
        $subjectId = $_GET['subjectId'];
        $data = [
            'name' => $_POST['name'],
            'start_time' => $_POST['start_time'],
            'end_time' => $_POST['end_time'],
            'duration_minutes' => $_POST['duration_minutes'],
            'status' => isset($_POST['status']) ? 1 : 0,
            'is_shuffle' => isset($_POST['is_shuffle']) ? 1 : 0,
            'subject_id' => $subjectId
        ];
        $model = new Quiz();
        $quiz = $model->insert($data);
        header('location: ' . BASE_URL . 'quiz/cap-nhat?id=' . $quiz->id);
        die;
    }

    public function editForm(){
        $quizId = $_GET['id'];
        $quiz = Quiz::where(['id', '=', $quizId])->first();

        $questions = Question::where(['quiz_id', '=', $quiz->id])->get();
        include_once './app/views/quiz/edit-form.php';

    }
}
?>