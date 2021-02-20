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

<form action="/addSup" method="POST">
  @csrf
  <div class="container">
    <h1>Tambahkan Data Pembimbing Kelompok</h1>
    <p>Masukkan Informasi</p>
    <hr>

    <label for="name"><b>NIP</b></label>
    <input type="text" placeholder="NIP" name="name" id="nip" required>
    
    <label for="team"><b>Kelompok</b></label>
    <input type="text" placeholder="Nomor Kelompok" name="team" id="team" required>

    <label for="name"><b>Nama</b></label>
    <input type="text" placeholder="Nama" name="name" id="name" required>

    <label for="name"><b>Nama Lengkap</b></label>
    <input type="text" placeholder="Nama Lengkap" name="name" id="fullname" required>

    <label for="name"><b>Posisi</b></label>
    <input type="text" placeholder="Posisi" name="name" id="position" required>

    <label for="name"><b>Prodi</b></label>
    <input type="text" placeholder="Program Studi" name="name" id="major" required>

    <label for="name"><b>Fakultas</b></label>
    <input type="text" placeholder="Fakultas" name="name" id="faculty" required>

    <label for="name"><b>Status</b></label>
    <input type="text" placeholder="Aktif" id="status" disabled>

    <button type="submit" class="registerbtn">Tambah</button>
  </div>
  
  <div class="container signin">
    <a href="{{url ('/team') }}">Kembali</a>
  </div>
</form>

</body>
</html>