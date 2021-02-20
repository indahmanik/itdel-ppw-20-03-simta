@extends('layout/mahasiswa')

@section('title', 'New Event')

@section('container-md-8')
<div class="col-md-7" style="margin:auto; margin-top: 10px;">
    <div class="modal-content" style="text-align: left;">
        <div class="modal-header">
            <h4 class="title">Add New Event</h4>
        </div>
        <div class="modal-body" style="text-align: left ;">
        
            <form action="/addevent" method="post">
                @csrf
                <div class="form-group">
                <label for="event">Event</label>
                <input name="event" class="form-control" type="text" placeholder="New Event" id="event">
                </div>  
                <div class="form-group">
                <label for="date">Deadline</label>
                <input name="date" class="form-control" type="date" placeholder="date" id="date">
                </div>
                <div class="form-group">
                <label for="description">Description</label>
                <input name="description" class="form-control" type="text" placeholder="Description" id="description">
                </div>   
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>  
    </div>
</div>
@endsection
