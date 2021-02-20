@extends('layout/mahasiswa')

@section('title', 'Tambah Jadwal')

@section('container-md-8')    
    <div class="col-md-7" style="margin:auto; margin-top: 10px;">
        <div class="modal-content" style="text-align: left;">
            <div class="modal-header">
                <h4 class="title">Tambah Jadwal</h4>
            </div>
            <div class="modal-body" style="text-align: left ;">
            
                <form >
                    <table>
                        <tr>
                            <label style="text-align:left;" >Nama Jadwal</label>
                            <input class="form-control mr-sm-2" type="text" placeholder="Nama Jadwal">
                            <br>
                        </tr>
                        <tr>
                            <label>Tanggal</label>
                            <input class="form-control mr-sm-2" type="date">
                        </tr>
                        <br>
                        <tr>
                            <label>Lokasi</label>
                            <input class="form-control mr-sm-2" type="textarea" placeholder="lokasi">
                        </tr>
                        <br>
                        <tr>
                            <label>Dosen/Pembina</label>
                            <input class="form-control mr-sm-2" type="textarea" placeholder="pembina">
                        </tr>
                    </table>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Add</button>
            </div>
        </div>
    </div>
@endsection
