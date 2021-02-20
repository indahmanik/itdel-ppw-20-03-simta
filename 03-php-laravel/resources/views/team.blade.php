<?php

$teams = App\Models\Teams::all();
$supervisors = App\Models\Supervisors::all();
$examiners = App\Models\Examiners::all();

?>

<style>
      table, th, td {
	    border-collapse:collapse;
	    border:1px solid #999;
	    font-family:Tahoma, Geneva, sans-serif;
	    font-size:12px;
      }

      .head {
	    background: rgb(206,220,231); /* Old browsers */
	    background: -moz-linear-gradient(top,  rgba(206,220,231,1) 0%, rgba(89,106,114,1) 100%); /* FF3.6+ */
	    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(206,220,231,1)), color-stop(100%,rgba(89,106,114,1))); /* Chrome,Safari4+ */
	    background: -webkit-linear-gradient(top,  rgba(206,220,231,1) 0%,rgba(89,106,114,1) 100%); /* Chrome10+,Safari5.1+ */
	    background: -o-linear-gradient(top,  rgba(206,220,231,1) 0%,rgba(89,106,114,1) 100%); /* Opera 11.10+ */
	    background: -ms-linear-gradient(top,  rgba(206,220,231,1) 0%,rgba(89,106,114,1) 100%); /* IE10+ */
	    background: linear-gradient(to bottom,  rgba(206,220,231,1) 0%,rgba(89,106,114,1) 100%); /* W3C */
	    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cedce7', endColorstr='#596a72',GradientType=0 ); /* IE6-9 */
      }
 
      .head th {
	    padding:10px;
	    color:#333;
	    text-shadow:1px 1px 0px #CCC;
	    font-size:14px;
      }
 
      .satu {
	    background-color:#CECECE;
      }
 
      .dua {
	    background-color:#E0E0E0;
      }
 
      .satu:hover, .dua:hover {
	    background-color:#BADFFE;
	    font-weight:bold;
	    cursor:pointer;
      }
	</style>

@extends('layout/koordinator')

@section('title', 'Bentuk Kelompok')

@section('team', 'active')

@section('container-md-8')

<div class="col-sm-10" align = "right" style="margin:auto; margin-top: 10px;">
      <br>
      <br>
  <div class="row">
      <div class="col-sm-11" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1); border-radius: 1px; padding: 20px; margin-left: 50px;">
        <div align="center">
        <h3><b>Kelompok Tugas Akhir</b></h3>

        <a href="{{url ('/team/create') }}">Tambah Data</a>
        <br><br>
        <!--menampilkan data di tabel-->
        @csrf
        <table border="1" width="1000px">
          <tr class="head"> 
            <th width="10%">Kelompok</th>
            <th> NIM</th>
            <th width="20%"> Nama</th>
            <th> Judul Tugas Akhir</th>
            <th width="20%"></th>
          </tr>

          @foreach ($teams as $team)
          <tr class="satu">
            <td>{{$team->team}}</td>
            <td>{{$team->nim}}</td>
            <td>{{$team->name}}</td>
            <td>{{$team->title}}</td>
            <td><center><a href="/team/edit/{{$team->registration_id}}"> Edit </a>  ||  <a href="/team/delete/{{$team->registration_id}}"> Hapus </a></td></center>
          </tr>
          @endforeach

        </table>
        </div>
      </div>
  </div>
      <br> <br>
  <div class="row">
      <div class="col-sm-11" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1); border-radius: 1px; padding: 20px; margin-left: 50px;">
        <div align="center">
        <h3><b>Dosen Pembimbing</b></h3>
        <a href="{{url ('/team/sup/create') }}">Tambah Data</a>
        <br><br>
        <!--menampilkan data di tabel-->
        @csrf
        <table border="1" width="1000px">
          <tr class="head"> 
            <th width="20%">Kelompok</th>
            <th> NIP</th>
            <th> Nama</th>
            <th width="20%"></th>
          </tr>

          @foreach ($supervisors as $sps)
          <tr class="satu">
            <td>{{$sps->team}}</td>
            <td>{{$sps->nip}}</td>
            <td>{{$sps->name}}</td>
            <td><center><a href="/sup/edit/{{$sps->nip}}"> Edit </a>  ||  <a href="/sup/delete/{{$sps->nip}}"> Hapus </a></td></center>
          </tr>
          @endforeach

        </table>
        </div>
      </div>
  </div>
  <br> <br>
  <div class="row">
      <div class="col-sm-11" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1); border-radius: 1px; padding: 20px; margin-left: 50px;">
        <div align="center">
        <h3><b>Dosen Penguji</b></h3>
        <a href="{{url ('/team/ex/create') }}">Tambah Data</a>
        <br><br>
        <!--menampilkan data di tabel-->
        @csrf
        <table border="1" width="1000px">
          <tr class="head"> 
            <th width="20%">Kelompok</th>
            <th> NIP</th>
            <th> Nama</th>
            <th width="20%"></th>
          </tr>

          @foreach ($examiners as $exm)
          <tr class="satu">
            <td>{{$exm->team}}</td>
            <td>{{$exm->nip}}</td>
            <td>{{$exm->name}}</td>
            <td><center><a href="/ex/edit/{{$exm->nip}}"> Edit </a>  ||  <a href="/ex/delete/{{$exm->nip}}"> Hapus </a></td></center>
          </tr>
          @endforeach

        </table>
        </div>
      </div>
  </div>
</div>
@endsection



