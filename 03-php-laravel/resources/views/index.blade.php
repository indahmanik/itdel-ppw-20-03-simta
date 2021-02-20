@extends('layout/mahasiswa')

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

  <div class="container">
    <div class="main-body"> 
      <div class="row gutters-sm">
        <div class="col-md-8 mb-3">
          <div class="card" style="height: 800px;">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="{{ $stu->img }}" width="200px" height="150px" style="float:left; border-radius:20%; object-fit:cover">
                <div class="mt-3">
                  <h4>{{ $stu->name }}</h4>
                  <p class="text-secondary mb-1">Student of {{ $stu->batch }}</p>
                  <p class="text-muted font-size-sm">{{ $stu->email }}</p>
                </div>
              </div>
            </div>
            <hr>
            <div class="d-flex flex-column ml-10">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h4 class="mb-0">Kelompok {{ $team->team }}</h4>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col">
                    <h5 class="mb-0">Anggota</h5>
                  </div>
                </div>
                <div class="row text-secondary">
                  <div class="col">
                  @foreach($teammem as $tim)
                  <div class="row">
                    <div class="col">
                      <p class="mb-0">{{$tim -> nim}} - {{$tim -> name}}</p>
                    </div>
                  </div>
                  @endforeach
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col">
                    <h5 class="mb-0">Dosen Pembimbing</h5>
                  </div>
                </div>
                <div class="row text-secondary">
                  <div class="col">
                  @foreach($sup as $s)
                  <div class="row">
                    <div class="col">
                      <p class="mb-0">{{$s -> nip}} - {{$s -> fullname}}</p>
                    </div>
                  </div>
                  @endforeach
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col">
                    <h5 class="mb-0">Dosen Penguji</h5>
                  </div>
                </div>
                <div class="row text-secondary">
                  <div class="col">
                  @foreach($exam as $e)
                  <div class="row">
                    <div class="col">
                      <p class="mb-0">{{$e -> nip}} - {{$e -> fullname}}</p>
                    </div>
                  </div>
                  @endforeach
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col">
                    <h5 class="mb-0">Judul Tugas Akhir</h5>
                  </div>
                </div>
                <div class="row text-secondary">
                  <div class="col">
                  <div class="row">
                    <div class="col">
                      <p class="mb-0">{{$team -> title}}</p>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-3" style="overflow-y: scroll; height: 800px;">
            <div class="card-body">
            <h4 class="mt-10 mb-10" style="text-align:center">TASK LIST</h4>
            <hr>
            @foreach($tasks as $task)
              <div class="row">
                <div class="col">
                  <h6 class="mb-0">Task</h6>
                </div>
              </div>
              <div class="row text-secondary">
                <div class="col">
                  <p class="mb-0">{{$task -> name_task}}</p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h6 class="mb-0" style="color:#5bbd69">Due date</h6>
                </div>
              </div>
              <div class="row text-secondary">
                <div class="col">
                  <p class="mb-0">{{$task -> due_date}}</p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h6 class="mb-0" style="color:#5b94bd">Submission status</h6>
                </div>
              </div>
              <div class="row text-secondary">
                <div class="col">
                  <p class="mb-0">{{$task -> submission_status}}</p>
                </div>
              </div>
              <hr>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
