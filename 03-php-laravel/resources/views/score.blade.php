@extends('layout/dosen')

@section('title', 'Score')

@section('container-md-8')
<div class="col-md-7" style="margin:auto; margin-top: 10px;">
<br><br><br>
    <h4 style="font-family:'Times New Roman', Times, serif;  text-align: center; color:black">Student's Score </h4><br />
    <br>
    <table class="table">
        <tbody>
        <thead class="thead-dark">
            <tr>
                <th style= "align:center" >Event</th>
                <th style= "margin:auto" >Team Id</th>
                <th style= "margin:auto" >Grade</th>
                <th style= "margin:auto">Action</th>
            </tr>
        </thead>
            <tr>
            @foreach ($sco as $sc)
                <td >{{$sc -> event}}</td>
                <td >{{$sc -> team_id}}</td>
                <td >{{$sc -> grade}}</td>
                <td> 
                <a href="/scores/edit/{{$sc->id}}" class="badge badge-primary">Edit</a>
                <a href="/scores/delete/{{$sc->id}}" class="badge badge-danger">Delete</a>
                </td>
            </tr>
                @endforeach
                
            </tr> 
        </tbody>
    </table><br>
</div>
@endsection