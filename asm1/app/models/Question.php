<?php
namespace App\Models;
class Question extends BaseModel{
    protected $tableName = 'questions';

    public function getAnswers(){
        return Answer::where(['question_id', '=', $this->id])->get();
    }
}
?>