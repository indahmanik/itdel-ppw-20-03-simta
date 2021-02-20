@extends('layout/koordinator')

@section('title', 'All Event')

@section('container-md-8')
<link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">

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
    </style>

<div class="col-md-10" style="margin:auto; margin-top: 10px;">
    <div class="card">
        <div class="card-block">
            <div class="row align-items-center justify-content-center">
                <div class="col" style='margin-left:25px'>
                    <h5>All Schedule
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
                            <form method="post" action="/events/addevent">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Schedule</label>
                                <input type="text" class="form-control" name="event" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Team ID</label>
                                <input type="text" class="form-control" name="team_id" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Date</label>
                                <input type="date" class="form-control" name="date" required>
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
                </div>
            </div>
            <br>
            <ul class="task-list">
            @foreach($events as $event)
                <li>
                    <i class="task-icon bg-c-green"></i>
                    <h6>{{$event->event}} (TeamID: {{$event->team_id}})<span class="float-right text-muted">{{$event->date}}</span></h6>
                    <p class="text-muted">{{$event->description}}
                    <span class="float-right text-muted">
                        <a href="/events/edit/{{$event->id_event}}" class="badge badge-info">Edit</a>
                        <a href="/events/delete/{{ $event->id_event }}" class="badge badge-danger">Delete</a>
                    </span>                           
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection