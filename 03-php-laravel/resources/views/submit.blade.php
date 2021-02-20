@extends('layout/mahasiswa')

@section('title', 'Submit Document Tugas Akhir')

@section('upload', 'active')

@section('container-md-8')
<div class="col-md-10" style="margin:auto; margin-top: 10px;">
<br><br><br>
  <h4 style="font-family:'Times New Roman', Times, serif;  text-align: center; color:#193Abf">Upload Document</h4><br />
  <form action="{{route('addsubmit')}}" method="post" enctype="multipart/form-data" id="box">
  @csrf
  <div class="form-group">
        <label for="team_id"><b>ID Team</b></label>
        <input name="team_id" class="form-control" type="text" disable id="team_id" value= "{{ $stu->teamid }}" required>
    </div>  
  <div class="form-group">
        <label for="major"><b>Major</b></label>
        <input name="major" class="form-control" type="text" placeholder="Type your major" id="major" required>
    </div>  
    <div class="form-group">
        <label for="title"><b>Title</b></label>
        <input name="title" class="form-control" type="text" placeholder="Enter the title" id="title" required>
    </div>
    Upload File :
    <input type="file" name="file" required> <br> <br>
    <a type="button" href="/upload" class="btn btn-danger" data-dismiss="modal">Cancel</a>
    <button type="submit" class="btn btn-primary" name="submit">upload</button>
  </form>
</div>		
@endsection
        
