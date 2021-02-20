
@extends('layout/mahasiswa')

@section('title', 'Upload Document Tugas Akhir')

@section('upload', 'active')

@section('container-md-8')
<div class="col-md-10" style="margin:auto; margin-top: 10px;">
  <div class="scroll">
    <br><br>
    <h3 style="font-family:'Times New Roman', Times, serif;  text-align: center; color:#193Abf">Tasks</h3><hr>
    <table class="table table-hover">
        <thead>
            <tr>
                <td style="font-family: bookman;" class="table-dark">Task</td>
                <td style="font-family: bookman;" class="table-dark">Submission status</td>
                <td style="font-family: bookman;" class="table-dark">Due date</td>
                <td style="font-family: bookman;" class="table-dark">Time Remaining</td>
                <td class="table-dark"></td>
            </tr>
        </thead>
        <tbody> 
            <tr>
            @foreach ($tasks as $tasks)
                <td style="font-family: bookman;">{{$tasks -> name_task}}</td>
                <td style="font-family: bookman;">{{$tasks -> submission_status}}</td>
                <td style="font-family: bookman;">{{$tasks -> due_date}}</td>
                <td style="font-family: bookman;">{{$tasks -> time_task}}</td>
                <td>  
                    <a href="{{url ('/submit') }}" class="btn btn-primary">Upload</a>
                </td>
            </tr>
                @endforeach
                
            </tr> 
        </tbody>
    </table>
  </div>
</div>
@endsection
