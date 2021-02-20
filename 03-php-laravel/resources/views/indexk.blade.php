@extends('layout/koordinator')

@section('title', 'Halaman Utama')

@section('container-md-8')
<style>
.bg-cover {
  background-size: cover;
  color: white;
  background-position: center center;
  position: relative;
  z-index: -2;
}
    body{
    margin-top:0px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
    }
    .main-body {
        padding: 15px;
    }
    .card {
        box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0,0,0,.125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>.col, .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }
    .mb-3, .my-3 {
        margin-bottom: 1rem!important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }
    .h-100 {
        height: 100%!important;
    }
    .shadow-none {
        box-shadow: none!important;
    }

    body{
        margin-top:0px;
        background:#f1f1f1;
    }

    .task-list {
      list-style: none;
      position: relative;
      margin: 0;
      padding: 30px 0 0;
    }
    .task-list:after {
      content: "";
      position: absolute;
      background: #ecedef;
      height: 100%;
      width: 2px;
      top: 0;
      left: 30px;
      z-index: 1;
    }
    .task-list li {
      margin-bottom: 30px;
      padding-left: 55px;
      position: relative;
    }
    .task-list li:last-child {
      margin-bottom: 0;
    }
    .task-list li .task-icon {
      position: absolute;
      left: 22px;
      top: 13px;
      border-radius: 50%;
      padding: 2px;
      width: 17px;
      height: 17px;
      z-index: 2;
      -webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2);
              box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2);
    }

    .card {
      border-radius: 0;
      -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
              box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
      border: none;
      margin-bottom: 30px;
      -webkit-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
    }
    .card .card-header {
      background-color: transparent;
      border-bottom: 1px solid #f1f1f1;
      padding: 20px 25px;
      position: relative;
    }
    .card .card-header h5 {
      margin-bottom: 0;
      color: #000;
      font-size: 17px;
      font-weight: 400;
      display: inline-block;
      margin-right: 10px;
      line-height: 1.1;
      position: relative;
    }
    .card .card-header h5:after {
      content: "";
      background-color: #04a9f5;
      position: absolute;
      left: -25px;
      top: 0;
      width: 4px;
      height: 20px;
    }
    .card .card-header.borderless {
      border-bottom: none;
    }
    .card .card-header.borderless h5:after {
      display: none;
    }
    .card .card-header .card-header-right {
      right: 10px;
      top: 10px;
      display: inline-block;
      float: right;
      padding: 0;
      position: absolute;
    }
    @media only screen and (max-width: 575px) {
      .card .card-header .card-header-right {
        display: none;
      }
    }
    .card .card-header .card-header-right .dropdown-menu {
      margin-top: 0;
    }
    .card .card-header .card-header-right .dropdown-menu li a {
      font-size: 14px;
      text-transform: capitalize;
    }
    .card .card-header .card-header-right .btn.dropdown-toggle {
      border: none;
      background: transparent;
      -webkit-box-shadow: none;
              box-shadow: none;
      color: #888;
    }
    .card .card-header .card-header-right .btn.dropdown-toggle i {
      margin-right: 0;
    }
    .card .card-header .card-header-right .btn.dropdown-toggle:after {
      display: none;
    }
    .card .card-header .card-header-right .btn.dropdown-toggle:focus {
      -webkit-box-shadow: none;
              box-shadow: none;
      outline: none;
    }
    .card .card-footer {
      border-top: 1px solid #f1f1f1;
      background: transparent;
      padding: 25px;
    }
    .card .card-block,
    .card .card-body {
      padding: 30px 25px;
    }
    .card.card-load {
      position: relative;
      overflow: hidden;
    }
    .card.card-load .card-loader {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      background-color: rgba(255, 255, 255, 0.7);
      z-index: 999;
    }
    .card.card-load .card-loader i {
      margin: 0 auto;
      color: #04a9f5;
      font-size: 24px;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
    }
    .card.full-card {
      z-index: 99999;
      border-radius: 0;
    }

    .bg-c-green {
        background: #1de9b6;
    }

    h6 {
        font-size: 14px;
    }
</style>

<div class="col-md-12" style="margin: auto;">
  <div class="jumbotron jumbotron bg-cover col-md-10" style="background-image:url('/pict/kampus2.jpg'); padding:auto; margin:auto; margin-top:10px">
    <h1 class="display-3" style="font-size:66px">Welcome to Sistem Manajemen Tugas Akhir</h1>
    <p class="lead">Proyek ini merupakan tugas Pengembangan dan Pengujian Website yang terdiri dari manajemen kelompok, pembimbing, pembentukan dewan penguji, pelaksanaan seminar, pelaksanaan seminar/sidang, penilaian, dan publikasi artefak (laporan).</p>
    <p><a class="btn btn-lg" style="background-color:white" role="button" invalid><?php date_default_timezone_set('Asia/Jakarta'); echo date('l, d M Y  H:i:s')?></a></p>
  </div>

  <h2 class="judul" style="text-align: center; font-size: 35px;">P U B L I K A S I</h2>
  <h6 style="text-align: center;">Publikasi Artefak Mahasiswa</h6>
  <br>

  <div class="container" style="text-align: center;">
    <div class="card" style="width: 33rem; margin: auto;">
      <div class="card-header">
        <h5 class="card-title">Sistem Informasi Pengajuan Izin Cuti Karyawan</h5>
      </div>
      <div class="card-body;">
        <img src="pict/gambar1.jpg" style="width: 31rem; padding-top: 15px;">
        <p class="card-text" style="text-align: right; font-size: 15px; padding-right: 15px;">Sistem Informasi/10 September 2020</p>
        <div class="container" style="text-align: left; padding-bottom: 10px;">
          <a href="#" class="card-link">Baca Selengkapnya</a>
        </div>
      </div>   
    </div>
  </div>
  <br>
  <br>

  <div class="container" style="text-align: center;">
    <form class="form-inline">
      @foreach ($artefak as $arte)
      <div class="card" style="width: 12rem; margin: auto;">
          <img src="pict/gambar2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
              <h6 class="card-title">{{$arte->title}}</h6>
          </div>
      </div>
      @endforeach
    </form>
  </div>
  <br>
  <br>
</div>
@endsection
