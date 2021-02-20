@extends('layout/dosen')

@section('title', 'Penilaian')

@section('container-md-8')
<div class="col-md-7" style="margin:auto; margin-top: 10px;">
    <div class="modal-content" style="text-align: left;">
        <div class="modal-header">
            <h4 class="title">Tambah komentar</h4>
        </div>
        <div class="modal-body" style="text-align: left ;">
        
            <form action="/addComment" method="POST">
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
                <label for="nomor_induk">Nomor Induk</label>
                <input name="nomor_induk" class="form-control" type="text" disabled id="nomor_induk" value= "{{ $cmt->user_id }}">
                </div>
                <div class="form-group">
                <label for="name">Nama</label>
                <input name="name" class="form-control" type="text" disabled id="name" value= "{{ $cmt->name }}">
                </div>
                <div class="form-group">
                <label for="comment">Comment</label>
                <input name="comment" class="form-control" type="text" id="comment">
                </div>
                <div class="form-group">
                <label for="date">Tanggal</label>
                <input name="date" class="form-control" type="date" id="date">
                </div>
                <div class="modal-footer">
                    <a href="/forum/diskusi" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>  
    </div>
</div>
@endsection