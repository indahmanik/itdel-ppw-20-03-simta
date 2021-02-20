@extends('layout/dosen')

@section('title', 'Settings')

@section('settings', 'active')

@section('container-md-8')

<style>
table {
    border-collapse: collapse;
    width: 100%;
  }

  th,
  td {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #d1d1d1
  }

  th {
    background-color: #314247;
    color: white;
  }

  * {
    box-sizing: border-box;
  }

  form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
  }

  form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
  }

  form.example button:hover {
    background: #0b7dda;
  }

  form.example::after {
    content: "";
    clear: both;
    display: table;
  }
 .search-container {
  float: right;
}

 input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

 .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
   .search-container {
    float: none;
  }
   a, input[type=text],  .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
   input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
<div class="col-md-7" style="margin:auto; margin-top: 10px;">
  <h2 class="judul" style="text-align: center; font-size: 35px;">Settings</h2>

  <div class="container" style="text-align: left" margin = 'center'>
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-column align-items-center text-center">
          <img  src="https://bootdey.com/img/Content/avatar/avatar7.png" width="200px" height="150px" style="float:left; border-radius:20%; object-fit:cover">
          <div class="mt-3">
            <h4>{{ $sup->name }}</h4>
            <p class="text-secondary mb-1">{{ $sup->nip }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  @if (session('message'))
  <div class="alert alert-success" role="alert" style="margin-top: 10pt">
      {{ session('message') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  @endif
  <br>
  <div class="container" style="text-align: left; margin-left: 0px; margin-right: 350px;">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-accountsettings-tab" data-toggle="tab"
          href="#nav-accountsettings" role="tab" aria-controls="nav-accountsettings" aria-selected="true">Account
          Settings</a>
        <a class="nav-item nav-link" id="nav-document-tab" data-toggle="tab" href="#nav-document" role="tab"
          aria-controls="nav-document" aria-selected="false">Document</a>    
      </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-accountsettings" role="tabpanel"
        aria-labelledby="nav-accountsettings-tab">
        <div class="container" style="text-align: left ;">
          <form class="form" novalidate="">
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label>Full Name</label>
                      <input class="form-control" type="text" name="name" disabled placeholder="Agnes Hinsa" value="{{ $sup->fullname }}">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label>NIP</label>
                      <input class="form-control" type="text" name="username" disabled placeholder="iss18058" value="{{ $sup->nip }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label>Faculty</label>
                      <input class="form-control" type="text" name="fakultas" disabled placeholder="FITE" value="{{ $sup->faculty }}">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label>Major</label>
                      <input class="form-control" type="text" name="prodi" disabled placeholder="Sistem Informasi" value="{{ $sup->major }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label>Position</label>
                      <input class="form-control" type="text" name="fakultas" disabled placeholder="FITE" value="{{ $sup->position }}">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label>Status</label>
                      <input class="form-control" type="text" name="prodi" disabled placeholder="Sistem Informasi" value="{{ $sup->status }}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-6 mb-3">
                <div class="mb-2"><b>Change Password</b>
                </div>
                <div class="row">
                  <div class="col">
                    <a href="/settingsd/password/edit/{{$users->user_id}}" class="btn btn-primary">Edit Password</a>
                  </div>
                </div> 
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="tab-pane fade" id="nav-document" role="tabpanel" aria-labelledby="nav-document-tab">
        <div class="container" style="text-align: left ;">
          <br>
            <div class="search-container" > 
            <form action="/artifactsd/search" style = "margin-bottom: 15px;" method="GET">
                <input type="text" style = "width : 500 px" placeholder="Search.." name="search" value="{{ old('search')}}">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
          <br>
          @if ($Artefakk->count() > 0)
          <table> 
            <tr>
              <th>Kode Administrasi</th>
              <th>Judul </th>
              <th>Major</th>
              <th>Status</th>
              <th>Views</th>
              <th>Views Action</th>
              <th>action</th>
            </tr>
            <tr>
            
            @foreach ($Artefakk as $artefak)
              <td>{{$artefak->administration_id}}</td>
              <td>{{$artefak->title}}</td>
              <td>{{$artefak->major}}</td>
              <td>{{$artefak->status}}</td>
              <td>{{$artefak->views}}</td>
              <td> 
              <a href="/artifacts/editviewpublic/{{$artefak->administration_id}}" class="badge badge-success">Set Public</a>
              <a href="/artifacts/editviewprivate/{{$artefak->administration_id}}" class="badge badge-primary">Set Private</a>
              </td>
              <td>
              <a href="/artifacts/delete/{{$artefak->administration_id}}" class="badge badge-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </table>
          @else
            <p>Hasil pencarian tidak ditemukan</p>
          @endif
        </div>
      </div>
    </div>
  </div>
  </br>
</div>
@endsection