<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #2d9ee3;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
    @foreach($teams as $team)
    <form action="/team/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $team->teamid }}"> <br/>
	<div class="container">
    <h1>Edit Data Kelompok</h1>
    <hr>

    <label for="team"><b>Kelompok</b></label>
    <input type="text" required="required" name="team" class="form-control" value="{{ $team->team }}">

    <label for="team_id"><b>ID Kelompok</b></label>
    <input type="text" required="required" name="team_id" class="form-control" value="{{ $team->team_id }}">

    <label for="nim"><b>NIM</b></label>
    <input type="text" required="required" name="nim" class="form-control" value="{{ $team->nim }}">

    <label for="name"><b>Nama</b></label>
    <input type="text" required="required" name="name" class="form-control" value="{{ $team->name }}">

    <label for="title"><b>Judul Tugas Akhir</b></label>
    <input type="text" required="required" name="title" class="form-control" value="{{ $team->title }}">

    <a href="{{url ('/team') }}">Kembali</a>
	<button type="submit" name="add" class="registerbtn">Update</button>
  	</div>
    </form>
	@endforeach
</body>
</html>