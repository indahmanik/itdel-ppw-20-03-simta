<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Public SIMTA</title>

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

.footer{
    background: #314247;
    color:white;
}

.links{
    ul {list-style-type: none;}
    li a{
    color: white;
    transition: color .2s;
    &:hover{
        text-decoration:none;
        color:white;
        }
    }
}  

.about-company{
    i{font-size: 25px;}
    a{
    color:white;
    transition: color .2s;
    &:hover{color:#4180CB}
    }
} 

.location{
    i{font-size: 18px;}
}

.copyright p{border-top:1px solid rgba(255,255,255,.1);} 
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
</head>

<body>

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#314247">
    <!-- Brand -->
    <a class="navbar-brand" href="/index">SIMTA 03</a>

    <div style="margin-left: auto">
    <div class="row">
    <div class="col-auto">
        <p style= "color: white; margin-top: 5px">Do You Have An Account?</p>
    </div>
    <div class="col">
        <a href="/" class="btn btn-block btn-success text-uppercase"><i class="fas fa-sign-in-alt"></i> Login</a>
    </div>
    </div>         
    </div>
</nav>

<div class="col-md-12" style="margin: auto;">
  <h1 class="judul text-uppercase" style="text-align: center; font-size: 35px; margin-top:30px">Publikasi Artefak Tugas Akhir</h1>
  <h4 style="text-align: center;">Daftar Artefak Mahasiswa</h4>

  <section class="pricing py-5">
    <div class="container">
    <form action="/artefak/searchp"  method="GET"  >
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

<footer>
        <div class="mt-5 pt-5 pb-5 footer">
            <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xs-12 about-company">
                <h2>SIMTA</h2>
                <p class="pr-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
                <p><a href="https://web.facebook.com/Institut.Teknologi.Del"><i class="fab fa-facebook-square fa-2x mr-3" style="color:white"></i></a>
                <a href="https://www.linkedin.com/school/institut-teknologi-del"><i class="fab fa-linkedin fa-2x" style="color:white"></i></a></p>
                </div>
                <div class="col-lg-3 col-xs-12 links">
                <h4 class="mt-lg-0 mt-sm-3">Team 03</h4>
                    <ul class="m-0 p-0">
                    <li><a href="https://github.com/indahmanik" style="color:white">Indah Manik (12S18008)</a></li>
                    <li><a href="https://github.com/Andika-MFT" style="color:white">Andika Tarigan (12S18037)</a></li>
                    <li><a href="https://github.com/Sublime18" style="color:white">Roy Napitupulu (12S18043)</a></li>
                    <li><a href="https://github.com/AgnesHinsa" style="color:white">Agnes Sinaga (12S18058)</a></li>
                    <li><a href="https://github.com/esterputt" style="color:white">Ester Sidabutar (12S18062)</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 location">
                <h4 class="mt-lg-0 mt-sm-4">Location</h4>
                <p>Institut Teknologi Del, Kec. Laguboti, Kab. Toba, Sumatera Utara, Indonesia 22381</p>
                <p class="mb-0"><i class="fa fa-phone mr-3"></i>+62 632 331234</p>
                <p><i class="far fa-envelope mr-3"></i></i></i>info@del.ac.id</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col copyright">
                <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
                </div>
            </div>
            </div>
        </div>
	</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
