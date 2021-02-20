<?php
$events = App\Models\Events::all();
?>

<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
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
    </style>
</head>

<body style="background-color:#F7F7F7">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#314247">
    <!-- Brand -->
    <a class="navbar-brand" href="/indexk">SIMTA 03</a></a>
    
    

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="/indexk">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/team">Team</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/events/details">Jadwal</a>
            </li>
        </ul>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">

        <li class="nav-item">
            <a class="nav-item nav-link mr-md-2" aria-expanded="false">
                <i class="fas fa-user-alt" style="margin-right:2px"></i>
                {{session('username')}}
            </a>
        </li>
            <li class="nav-item">
                <a class="nav-link p-2" href="/logout" rel="noopener" aria-label="Notification">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    </nav>

    @yield('container-md-8')
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
</body> 
</html>
