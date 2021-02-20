@extends('layout/dosen')

@section('title', 'Review Document Tugas Akhir')

@section('reviewdoc', 'active')

@section('container-md-8')


<div class="col-md-10" style="margin:auto; margin-top: 10px;">
<br><br><br>
    <div class="scroll">
        <h4 style="font-family:'Times New Roman', Times, serif;  text-align: center; color:#193Abf">Review Documents</h4><br />
        <form id="box" method="post" action="/addreview" enctype="multipart/form-data">
        @csrf 
            <div class="form-group">
                <div class="form-group">
                    <label for="prof_name"><b>Reviewer</b></label>
                    <input name="prof_name" class="form-control" type="text" disabled id="prof_name" value= "{{ $sup->name }}" required>
                </div> 
                <div class="form-group">
                    <label for="team_id"><b>Team ID</b></label>
                    <input name="team_id" class="form-control" type="text" placeholder="Team id" id="team_id" required>
                </div>
                <div class="form-group">
                    <label for="title"><b>Title</b></label>
                    <input name="title" class="form-control" type="text" placeholder="Title" id="title" required>
                </div>
                <label for="exampleFormControlTextarea1"><b>Type Review</b></label>
                <textarea class="form-control" id="text_review" rows="3" name="text_review" required></textarea>
            </div>
            <a type="button" href="/reviewdoc" class="btn btn-danger" data-dismiss="modal">Cancel</a>
            <button type="submit" class="btn btn-primary" name="submit">Review</button>
        </form>
    </div>
</div>
@endsection
