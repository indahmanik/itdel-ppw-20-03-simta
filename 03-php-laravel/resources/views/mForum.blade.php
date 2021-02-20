<?php
$forums = App\Models\Forums::all();
?>

<style>
      #forum {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #forum td, #forum th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #forum tr:nth-child(even){
        background-color: #f2f2f2;
      }

      #forum tr:hover {
        background-color: #ddd;
      }

      #forum th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #193Abf;
        color: white;
      }

      .ataz{
        text-align: center;
      }
	</style>

@extends('layout/mahasiswa')

@section('title', 'Halaman Forum')

@section('forum', 'active')

@section('container-md-8')   
    
    
    <div class="col-sm-10" align = "right" style="margin:auto; margin-top: 10px;">
      <br>
      <br>
      <div class="row">
        
      
      <div class="col-sm-11" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1); border-radius: 1px; padding: 20px; margin-left: 50px;">
        <div align="center">
        <h3><b>FORUM</b></h3>
        
        <!--menampilkan data di tabel-->
        <table id="forum">
          <tr class="ataz"> 
            <th width="10%">Kelompok</th>
            <th width="30%">Topik</th>
            <th width="20%">Dibuat Oleh</th>
            <th width="20%">Tanggal Pembaharuan</th>
            <th width="30%">Deskripsi</th>
          </tr>
          <tr>
            <td>1</td>
            <td> <a href="{{url ('/forum/diskusi') }}">Diskusi Kelompok</a></td>
            <td>Mario</td>
            <td>2020-12-28</td>
            <td>Silahkan setiap anggota kelompok melakukan diskusi.</td>
          </tr>

          @foreach ($forums as $forum)
          <tr>
            <td>{{$forum->team_id}}</td>
            <td> <a href="{{url ('/forum/diskusi') }}">{{$forum->title}}</a></td>
            <td>{{$forum->creator}}</td>
            <td>{{$forum->date_created}}</td>
            <td>{{$forum->comment}}</td>
          </tr>
          @endforeach
        </table>
        </div>
      </div>
    </div>
    </div>
  @endsection
