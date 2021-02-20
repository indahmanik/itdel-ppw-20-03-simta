@extends('layout/dosen')

@section('title', 'Update Task')

@section('container-md-8')
<div class="col-md-8" style="margin:auto; margin-top: 10px;">
    <h3 style="font-family:'Times New Roman', Times, serif;  text-align: center; color:#193Abf">Update Task Student</h3><br />

    @foreach($tasks as $task)
    <form action="/task/update" method="post">
    {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $task->task_id }}"> <br/>

        <div class="modal-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label class="ml-4 mr-4"><b>Team ID</b></label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" required="required" name="team_id" class="form-control" value="{{ $task->team_id }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label class="ml-4 mr-4"><b>Name Task</b></label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" required="required" name="name_task" class="form-control" value="{{ $task->name_task }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label class="ml-4 mr-4"><b>Submission Status</b></label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" required="required" name="submission_status" class="form-control" value="{{ $task->submission_status }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label class="ml-4 mr-4"><b>Due Date</b></label>
                    </div>
                    <div class="col-md-8">
                        <input type="date" required="required" name="due_date" class="form-control" value="{{ $task->due_date }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <label class="ml-4 mr-4"><b>Times Remaining</b></label>
                    </div>
                    <div class="col-md-8">
                        <input type="time" required="required" name="time_task" class="form-control" value="{{ $task->time_task }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a type="button" href="/listTask" class="btn btn-danger" data-dismiss="modal">Cancel</a>
            <button type="submit" name="add" class="btn btn-primary">Update</button>
        </div>
    </form>
    @endforeach
</div>
@endsection