@extends('layout/dosen')

@section('title', 'Profile')

@section('container-md-8') 
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style>

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

    .modal-confirm {		
      color: #636363;
      width: 400px;
    }
    .modal-confirm .modal-content {
      padding: 20px;
      border-radius: 5px;
      border: none;
      text-align: center;
      font-size: 14px;
    }
    .modal-confirm .modal-header {
      border-bottom: none;   
      position: relative;
    }
    .modal-confirm h4 {
      text-align: center;
      font-size: 26px;
      margin: 30px 0 -10px;
    }
    .modal-confirm .close {
      position: absolute;
      top: -5px;
      right: -2px;
    }
    .modal-confirm .modal-body {
      color: #999;
    }
    .modal-confirm .modal-footer {
      border: none;
      text-align: center;		
      border-radius: 5px;
      font-size: 13px;
      padding: 10px 15px 25px;
    }
    .modal-confirm .modal-footer a {
      color: #999;
    }		
    .modal-confirm .icon-box {
      width: 80px;
      height: 80px;
      margin: 0 auto;
      border-radius: 50%;
      z-index: 9;
      text-align: center;
      border: 3px solid #f15e5e;
    }
    .modal-confirm .icon-box i {
      color: #f15e5e;
      font-size: 46px;
      display: inline-block;
      margin-top: 13px;
    }
    .modal-confirm .btn, .modal-confirm .btn:active {
      color: #fff;
      border-radius: 4px;
      background: #60c7c1;
      text-decoration: none;
      transition: all 0.4s;
      line-height: normal;
      min-width: 120px;
      border: none;
      min-height: 40px;
      border-radius: 3px;
      margin: 0 5px;
    }
    .modal-confirm .btn-secondary {
      background: #c1c1c1;
    }
    .modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
      background: #a8a8a8;
    }
    .modal-confirm .btn-danger {
      background: #f15e5e;
    }
    .modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
      background: #ee3535;
    }
    </style>

  <div class="col-md-12" style="margin: auto;">
    <div>
        <div class="main-body"> 
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4>{{ $sup->name }}</h4>
                          <p class="text-secondary mb-1">Assign for team {{ $sup->team_id }}</p>
                          <p class="text-muted font-size-sm">{{ $sup->position }}</p>
                          <form class="form-inline" action="/settingsd" style="margin-left: 20px">
                            <button class="btn btn-outline-primary center" type="submit">Edit Profile</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $sup->fullname }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">NIP</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $sup->nip }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Major</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $sup->major }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Faculty</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $sup->faculty }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Position</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $sup-> position }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Status</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $sup->status}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div style="margin-top:-45px; margin-left:15px; margin-right:15px">
          <div class="row">
              <div class="col">
                  <div class="card">
                      <div class="card-block">
                          <div class="row align-items-center justify-content-center">
                              <div class="col" style='margin-left:25px'>
                                  <h5>My Schedule
                                    <span class="float-right text-muted">
                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                                        + Add Schedule
                                      </button>
                                    </span>
                                  </h5>
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Add new schedule</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form method="post" action="/profiled/addeventd">
                                          @csrf
                                            <div class="form-group">
                                              <label for="recipient-name" class="col-form-label">Schedule</label>
                                              <input type="text" class="form-control" name="event">
                                            </div>
                                            <div class="form-group">
                                              <label for="recipient-name" class="col-form-label">Team ID</label>
                                              <input type="text" class="form-control" name="team_id">
                                            </div>
                                            <div class="form-group">
                                              <label for="recipient-name" class="col-form-label">Date</label>
                                              <input type="date" class="form-control" name="date">
                                            </div>
                                            <div class="form-group">
                                              <label for="message-text" class="col-form-label">Description:</label>
                                              <textarea class="form-control" name="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <span>{{ $sup->name }}</span>
                              </div>
                          </div>
                          <br>
                          <ul class="task-list">
                            @foreach($event as $event)
                              <li>
                                  <i class="task-icon bg-c-green"></i>
                                  <h6>{{$event->event}}<span class="float-right text-muted">{{$event->date}}</span></h6>
                                  <p class="text-muted">Team {{$event->team_id}} : {{$event->description}}
                                    <span class="float-right text-muted">
                                      <a href="/profiled/edit/{{$event->id_event}}" class="badge badge-info">Edit</a>
                                      <a href="/profiled/delete/{{ $event->id_event }}" class="badge badge-danger">Delete</a>
                                    </span>
                                  </p>                                  
                              </li>
                              @endforeach
                          </ul> 
                      </div>
                  </div>
              </div>
            </div>
        </div>
      </div>   
    </div>
  </div>
        
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
@endsection
