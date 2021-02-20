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
<title>Edit Data Penguji</title>
</head>
<body>
    @foreach($exams as $exams)
    <form action="/ex/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $exams->nip }}"> <br/>
	<div class="container">
    <h1>Edit Data Penguji</h1>
    <hr>

    <label for="name"><b>NIP</b></label>
    <input type="text" required="required" class="form-control" value="{{ $exams->nip }}" name="nip">
    
    <label for="team"><b>Kelompok</b></label>
    <input type="text" required="required" class="form-control" value="{{ $exams->team }}" name="team">

    <label for="name"><b>Nama</b></label>
    <input type="text" required="required" class="form-control" value="{{ $exams->name }}" name="name">

    <label for="name"><b>Nama Lengkap</b></label>
    <input type="text" required="required" class="form-control" value="{{ $exams->fullname }}" name="fullname">

    <label for="name"><b>Posisi</b></label>
    <input type="text" required="required" class="form-control" value="{{ $exams->position }}" name="position">

    <label for="name"><b>Prodi</b></label>
    <input type="text" required="required" class="form-control" value="{{ $exams->major }}" name="major">

    <label for="name"><b>Fakultas</b></label>
    <input type="text" required="required" class="form-control" value="{{ $exams->faculty }}" name="faculty">

    <label for="name"><b>Status</b></label>
    <input type="text" placeholder="Aktif" value="{{ $exams->status }}" name="status" disabled>

    <a href="{{url ('/team') }}">Kembali</a>
	<button type="submit" name="add" class="registerbtn">Update</button>
  	</div>
    </form>
	@endforeach
</body>
</html>