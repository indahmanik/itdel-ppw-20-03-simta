@extends('layout/dosen')

@section('title', 'Penilaian')

@section('container-md-8')
<div class="col-md-7" style="margin:auto; margin-top: 10px;">
    <div class="modal-content" style="text-align: left;">
        <div class="modal-header">
            <h4 class="title">Penilaian</h4>
        </div>
        <div class="modal-body" style="text-align: left ;">
        
            <form action="/scores/addscore" method="POST">
                @csrf
                @if (session('message'))
                <div class="alert alert-success" role="alert" style="margin-top: 10pt">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="form-group">
                <label for="nip">NIP</label>
                <input name="nip" class="form-control" type="text" disabled id="nip" value= "{{ $sup->nip }}">
                </div>
                <div class="form-group">
                <label for="event">Event</label>
                <input name="event" class="form-control" type="text"  id="event" required> 
                </div>  
                <div class="form-group">
                <label for="team_id">Team Id</label>
                <input name="team_id" class="form-control" type="text"  id="team_id" required>
                </div>
                <div class="form-group">
                <label for="grade">Grade</label>
                <input name="grade" class="form-control" type="text" id="grade" required>
                </div>
                <div class="modal-footer">
                    <a href="/scores" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>  
    </div>
</div>
@endsection