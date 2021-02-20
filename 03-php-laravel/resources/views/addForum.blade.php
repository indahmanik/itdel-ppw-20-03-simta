@extends('layout/dosen')

@section('title', 'Tambah Forum')

@section('container-md-8')
<div class="col-md-7" style="margin:auto; margin-top: 10px;">
        
        <div class="modal-content" style="text-align: left;">
            <div class="modal-header">
              
                <center><h4 class="title"><center>Tambahkan Forum</center></h4></center>
               
            </div>
            <div class="modal-body" style="text-align: left ;">
            
                <form action="/addForum" method="post">
                    @csrf
                    <div class="container">
                    <table>
                        <tr>
                            <label for="team_id" style="text-align:left;" ><b>Kelompok</b></label>
                            <input class="form-control mr-sm-2" type="text" placeholder="Nomor Kelompok" name="team_id" id="team_id" required>
                        <br>
                        </tr>
                        <tr>
                            <label for="title" style="text-align:left;" ><b>Topik</b></label>
                            <input class="form-control mr-sm-2" type="text" placeholder="Masukkan Topik" name="title" id="title" required>
                        <br>
                        </tr>
                        <tr>
                            <label for="creator"><b>Creator</b></label>
                            <input name="creator" class="form-control" type="text" id="creator" value= "{{ $ffm->name }}">
                        </tr>
                        <br>
                        <tr>
                            <label for="comment"><b>Tambahkan Komentar</b></label>
                            <input class="form-control mr-sm-2" type="text" placeholder="Tambahkan Komentar" name="comment" id="comment" required>
                        </tr>
                        <br>
                        <tr>
                            <label><b>Deadline</b></label>
                            <input class="form-control mr-sm-2" type="date" name="date_created" id="date_created">
                        </tr>
                    </table>
                    <br>
                    <p align="right">
                    <button type="submit" class="btn btn-outline-primary" data-dismiss="modal">Add</button>
                    </p>
                    </div>
                </form>
            </div>
        </div>

    </div>

    @endsection
