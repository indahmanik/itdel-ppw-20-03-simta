@extends('layout/dosen')

@section('title', 'Halaman Artefak')

@section('container-md-8')
<style>

.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 2rem;
  margin: 0;
}

.pricing .card-price .period {
  font-size: 1.2rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }
  .pricing .card:hover .btn {
    opacity: 1;
  }
}

.searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background-color: #353b48;
    border-radius: 30px;
    padding: 10px;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 450px;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }
</style>

<div class="col-md-12" style="margin: auto;">
  <h1 class="judul text-uppercase" style="text-align: center; font-size: 35px; margin-top:30px">Publikasi Artefak Tugas Akhir</h1>
  <h4 style="text-align: center;">Daftar Artefak Mahasiswa</h4>

  <section class="pricing py-5">
    <div class="container">
    <form action="/artefak/searchd"  method="GET"  >
            <div class="container h-100">
              <div class="d-flex justify-content-center h-100">
                <div class="searchbar"> 
                  <input class="search_input" type="text" name="search" placeholder="Search..." value="{{ old('search')}}">
                  <button class="search_icon" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
        </form>
     <br>
      <div class="row">
        <!-- Pro Tier -->
        @foreach ($artefak as $arte)
        <div class="col-md-6">
          <div class="card" style="height:13cm; background-color:#e4e4ec; margin-bottom:50px" >
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Artefak Mahasiswa</h5>
              <h6 class="card-price text-center">{{$arte->title}}</h6>
              <p class="period" style="text-align:center">Team ID:{{$arte->team_id}}</p>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"></span><strong>Program Studi:    </strong>{{$arte->major}}</li>
                <li><span class="fa-li"></span><strong>Date:    </strong>{{$arte->date}}</li>
                <li><span class="fa-li"></span><strong>Administration ID:    </strong>{{$arte->administration_id}}</li>
                <li><span class="fa-li"></span><strong>Views:    </strong>{{$arte->views}}</li>
              </ul>
              <div class="modal-footer" style="position:absolute; bottom:0px; right: 0;">
              <a href="/artefak/view/{{$arte->administration_id}}" class="btn btn-block btn-primary text-uppercase">View Artefak</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <br>
      </div>
    </div>
  </section>
</div>
@endsection