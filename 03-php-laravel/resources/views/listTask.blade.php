<?php
$tasks = App\Models\Tasks::all();
?>

@extends('layout/dosen')

@section('title', 'Task')

@section('listTask', 'active')

@section('container-md-8')


<div class="col-md-10" style="margin:auto; margin-top: 10px;">
    <br><br><br>
    <h6 style="font-family:'Times New Roman', Times, serif;  text-align: left; color:blue;"><a href="{{url ('/task') }}"><i class="fas fa-file"></i> Upload Task</a></h6>
    <h3 style="font-family:'Times New Roman', Times, serif;  text-align: center; color:black">List Task Student</h3><br />
    <br>
    <table class="table" width="600px">
        <tbody>
        <thead class="thead-dark">
            <tr>
                <th style="font-family: bookman;">ID Team</th>
                <th style="font-family: bookman;">Task</th>
                <th style="font-family: bookman;">Submission status</th>
                <th style="font-family: bookman;">Due date</th>
                <th style="font-family: bookman;">Time Remaining</th>
                <th style="font-family: bookman;">Action</th>
            </tr>
        </thead>
            <tr>
            @foreach ($tasks as $tasks)
                <td style="font-family: bookman;">{{$tasks -> team_id}}</td>
                <td style="font-family: bookman;">{{$tasks -> name_task}}</td>
                <td style="font-family: bookman;">{{$tasks -> submission_status}}</td>
                <td style="font-family: bookman;">{{$tasks -> due_date}}</td>
                <td style="font-family: bookman;">{{$tasks -> time_task}}</td>
                <td ><a href="/task/edit/{{ $tasks->task_id }}" class="badge badge-success"><i class="fa fa-edit"></i></a> || <a href="/task/delete/{{ $tasks-> task_id }}" class="badge badge-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></a></td>
            </tr>
                @endforeach
                
            </tr> 
        </tbody>
    </table><br>
</div>
@endsection
