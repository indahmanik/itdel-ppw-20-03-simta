<?php
$comments = App\Models\Comments::all();
?>

@extends('layout/dosen')

@section('title', 'Forum: Diskusi')

@section('forum', 'active')

@section('container-md-8')

<style>
/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

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
        background-color: black;
        color: white;
      }

      .ataz{
        text-align: center;
      }
</style>

<div class="card" style="padding: 20px;">
    <h2>Diskusi Kelompok</h2>
    <h5>Revisi Dokumen, Dec 30, 2020</h5>
    <p>Forum ini disediakan untuk anggota kelompok yang bersangkutan.</p>
    <p>Silahkan melakukan diskusi pada kolom komentar agar dosen dapat melihat progress yang dilakukan.</p>


    <br>
    <div class="modal-footer">
        <a href="/forum/diskusi/comment" type="button" class="btn btn-primary" data-dismiss="modal">Tambahkan komentar</a>
    </div>
</div>

    <div style="padding: 50px;">
        <table id="forum">
          <tr class="ataz"> 
            <th width="10%">Nomor Induk</th>
            <th width="20%">Nama</th>
            <th width="50%">Komentar</th>
            <th width="40%">Tanggal Pembaharuan</th>
          </tr>

          <tr>
            <td>0128058805</td>
            <td>Mario</td>
            <td>Silahkan setiap anggota kelompok melakukan diskusi.</td>
            <td>2020-12-28</td>
          </tr>

          @foreach ($comments as $cm)
          <tr>
            <td>{{$cm->nomor_induk}}</td>
            <td>{{$cm->name}}</td>
            <td>{{$cm->comment}}</td>
            <td>{{$cm->date}}</td>
          </tr>
          @endforeach
        </table>
    </div>

@endsection