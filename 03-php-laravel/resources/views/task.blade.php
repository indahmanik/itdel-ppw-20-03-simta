@extends('layout/dosen')

@section('title', 'Upload Task')

@section('listTask', 'active')

@section('container-md-8')


<div class="col-md-8" style="margin:auto; margin-top: 10px;">
    <br><br><br>
    <h3 style="font-family:'Times New Roman', Times, serif;  text-align: center; color:#193Abf">Upload Task Student</h3><br />
    <form style="margin-left: 10px" method="post" action="/addtask">
    @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="team_id"><b>Team ID</b></label>
                <input name="team_id" class="form-control" type="text" placeholder="Team id" id="team_id" required>
            </div>
            <label for="name_task"><b>Name Task</b></label>
            <input name="name_task" class="form-control" type="text" placeholder="New task" id="name_task" required>
            </div>  
            <div class="form-group">
            <label for="submission_status"><b>Submission Status</b></label>
            <input name="submission_status" class="form-control" type="submission_status" placeholder="submission status" id="submission_status" required>
            </div>
            <div class="form-group">
            <label for="due_datee"><b>Due Date</b></label>
            <input name="due_date" class="form-control" type="date" placeholder="date" id="date" required>
            </div>   
            <div class="form-group">
            <label for="due_datee"><b>Times Remaining</b></label>
            <input name="time_task" class="form-control" type="time" placeholder="time" id="time" required>
            </div>   
            <div class="modal-footer">
            <a type="button" href="/listTask" class="btn btn-danger" data-dismiss="modal">Cancel</a>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>
@endsection
