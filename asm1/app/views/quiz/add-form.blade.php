@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-10 offset-1 mt-3">
        <div class="card">
            <div class="card-header">
                <h4>Tạo mới Bài quiz</h4>
            </div>
            <div class="card-body">
                <form action="<?= BASE_URL . 'quiz/save-add?subjectId=' . $subjectId?>" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mt-3">
                                <label for="">Tên quiz</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Môn học</label>
                                <select name="subject_id" class="form-control">
                                    @foreach ($subjects as $sub)
                                    <option value="{{$sub->id}}">{{$sub->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Thời gian bắt đầu</label>
                                <input type="datetime-local" name="start_time" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Thời gian kết thúc</label>
                                <input type="datetime-local" name="end_time" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mt-3">
                                <label for="">Thời gian làm bài</label>
                                <input type="number" step="0" name="duration_minutes" class="form-control">
                            </div>
                            <div class="form-check mt-5">
                                <input class="form-check-input" name="status" type="checkbox" value="1" id="status">
                                <label class="form-check-label" for="status">
                                    Online
                                </label>
                            </div>
                            <div class="form-check mt-5">
                                <input class="form-check-input" name="is_shuffle" type="checkbox" value="1" id="is_shuffle">
                                <label class="form-check-label" for="is_shuffle">
                                    Đảo câu
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="" class="btn btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>   
            </div>
        </div>
         
    </div>
</div>
@endsection