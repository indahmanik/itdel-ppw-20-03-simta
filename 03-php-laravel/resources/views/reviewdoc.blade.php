<?php
$artefak = App\Models\Artifacts::all();

?>

@extends('layout/dosen')

@section('title', 'Review Document Tugas Akhir')

@section('reviewdoc', 'active')

@section('container-md-8')


<div class="col-md-10" style="margin:auto; margin-top: 10px;">
    <div class="scroll">
        <br>
        <br>
        <h2 style="font-family:'Times New Roman', Times, serif;  text-align: center; color:#193Abf"> Folder Upload </h2><br />
        <br>
        <br>
        <table class="table">
        <thead class="thead-dark">
        <tr class="head"> 
            <th> ID</th>
            <th> ID Team</th>
            <th> JUDUL</th>
            <th> ACTION </th>
        </tr>
        </thead>
        
        <tr class="satu">
        @foreach ($artefak as $arte)
            <td>{{$arte -> administration_id}}</td>
            <td>{{$arte -> team_id}}</td>
            <td>{{$arte -> title}}</td>
            <td ><a href="/review" class="badge badge-success"><i class="fa fa-edit"></i></a> || <a href="/review/view/{{$arte->administration_id}}" class="badge badge-secondary" ><i class="fa fa-eye"></a></td>
        </tr>
        @endforeach
        
        </table>
    </div>
</div>
@endsection
