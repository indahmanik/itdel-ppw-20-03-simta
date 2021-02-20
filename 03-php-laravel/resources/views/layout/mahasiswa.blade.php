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
    <a class="navbar-brand" href="/index">SIMTA 03</a></a>
    
    

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="/index">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/mForum">Forum</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/artefak">Artefak</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Activity
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/progress">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5h-2v12h2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
                    </svg>
                    Progress
                </a>
                <a class="dropdown-item" href="/upload">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                    <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
                    <path fill-rule="evenodd" d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    Upload
                </a>
            </div>
            </li>
        </ul>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">

        <li class="nav-item dropdown">
            <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-alt" style="margin-right:2px"></i>
                {{session('username')}}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                <a class="dropdown-item" disabled>{{session('user_id')}} {{session('username')}}</a>
                <a class="dropdown-item" href="/profilem">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                    Profile
                </a>
                <a class="dropdown-item" href="/messages">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-dots-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    Messages
                </a>

            </div>
        </li>

            <li class="nav-item">
                <a class="nav-link p-2" href="/settingsm" rel="noopener" aria-label="Settings">
                    <i class="fas fa-cogs"></i>
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
