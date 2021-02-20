<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Login Page</title>

    <style>
        @import 
        url('https://fonts.googleapis.com/css?family=Ubuntu');
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Ubuntu', sans-serif;
            height: 100vh;
            margin: 0;
        }

        .title {
            text-transform: uppercase;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 7%;
        }

        .card {
            box-shadow: 0 5px 10px rgba(0,0,0,0.3);
            display: grid;
            grid-template-columns: 1fr 1fr;
            height: 500px;
            width: 750px;
        }

        .card > .left {
            background-image: url('https://images.unsplash.com/photo-1580537659466-0a9bfa916a54?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80');
            background-position: bottom;
            background-size: cover;
        }

        .card > .right {
            display: flex;
            align-items: center;
            padding: 0 2rem;
        }

        form {
            width: 100%;
        }

        .form-input {
            display: flex;
            flex-direction: column-reverse;
        }

        .form-input > label {
            color: #2C3A47;
            font-weight: bold;
            margin: 0;
            text-transform: uppercase;
            transition: color 0.3s ease-in-out;
        }

        .form-input > input[type="text"]:focus + label,
        .form-input > input[type="password"]:focus + label {
            color: #73b6fa;
        }

        form input {
            margin-bottom: 20px;
            width: 100%;
        }

        .form-input > input[type="text"],
        .form-input > input[type="password"] {
            border: none;
            border-bottom: 2px solid #2C3A47;
            height: 30px;
            outline: none;
            transition: border-bottom .3s ease-in-out;
        }

        .form-input > input[type="text"]:focus,
        .form-input > input[type="password"]:focus {
            border-bottom: 2px solid #73b6fa;
        }

        .btn {
            background-color: #2C3A47;
            border: none;
            color: #FFF;
            cursor: pointer;
            font-size: 1rem;
            height: 40px;
            transition: background-color 0.3s ease-in-out,
                        box-shadow .3s ease-in-out,
                        transform .3s ease-in-out;
        }

        .btn:hover {
            background-color: #73b6fa;
            box-shadow: 0 5px 10px rgba(0,0,0,.3);
            transform: translateY(-3px);
        }

        .forgot-password {
            color: #000;
            font-size: .8rem;
            font-weight: bold;
            text-transform: uppercase;
            transition: letter-spacing .3s ease-in-out;
        }

        .forgot-password:hover {
        letter-spacing: 1px;
        }

    </style>
</head>

<body>
    <div class="container">
    <h3 class="title">Sistem Informasi Manajemen Tugas Akhir</h3>
    <div class="card" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">
        <div class="left"></div>
        <div class="right">
        <form action="/auth" method="post">
        @csrf
        <center>
            <img src="pict/Del.png" width="100" height="100" class="d-inline-block">
            <p>Institut Teknologi Del</p>
            <br>
        </center>
            <div class="form-input">
                <input type="text" id="username" name="username" placeholder="username" required>
                <label for="username">Username</label>
            </div>
            <div class="form-input">
                <input type="password" id="password" name="password" placeholder="*********" required>
                <label for="password">Password</label>
            </div>
            @if (session('message'))
            <div class="alert alert-danger" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <button type="submit" class="btn btn-outline-primary" name="login" style="padding-left: 15px; padding-right: 15px; float: right;">LOGIN</button>
            <p> Don't have an account? <br> <a href="/artefak/public" class="forgot-password">Login As Guest</a></p>
            
        </form>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
