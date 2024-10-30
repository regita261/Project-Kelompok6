<!DOCTYPE html>
<html>
<head>
<style>
input[type=text] , select {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box; }

input [type=submit] {
	width: 10%;
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer; }

input [type=submit]:hover {
	background-color: #45a049;
	}
div {
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px;
	}

.kotakform {
	width: 80%;
	margin: 20px auto 20px auto;
	}
h1{
	text-align: center;
	margin: 80px auto 0 auto;
	}
</style>
</head>

<body>

<h1>FORMULIR PENDAFTARAN</h1>
<p align="center">____________________.__________________</p>
<div class="kotakform">
 <form action="prog_formulir.php" method = "POST">
  <label for ="nik">NIK</label>
   <input type="text" id="nik" name="nik" placeholder = "NIK Anda">

 <label for="fname">Nama Lengkap</label>
   <input type="text"id="name" name = "nama"placeholder="Nama Lengkap Anda">

  <label for="addr">Alamat</label>
   <input type="text"id="addres"name="alamat"placeholder="Alamat Anda">

  <label for="addr">Tempat Lahir</label>
   <input type="text"id="addres"name="tempat_lahir"placeholder="tempat_lahir">

   
    	Tanggal Lahir (bulan/tanggal/tahun)
    <p>
     <label for="addr">tanggal lahir</label>
  <input type="date" id="tanggal_lahir" name="tanggal_lahir">
</p>
   <tr>
      <td>JENIS KELAMIN</td>
<td>
  <p>
    <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-Laki">
    <label for="laki-laki">Laki-Laki</label>
  </p>
  <p>
    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
    <label for="perempuan">Perempuan</label>
  </p>
</td>
    </tr>

    

  <label for="agama">Agama:</label>
<select id="agama" name="agama">
  <option value="">Pilih Agama</option>
  <option value="Islam">Islam</option>
  <option value="Kristen">Kristen</option>
  <option value="Katolik">Katolik</option>
  <option value="Hindu">Hindu</option>
  <option value="Buddha">Buddha</option>
  <option value="Konghucu">Konghucu</option>
</select>
  <label for="jurusan">Prodi</label>
  <select id="jurusan_"name="jurusan">
    <option value="TI">Teknik Informatika</option>
    <option value="TM">Teknik Mesin</option>
  </select>
  <input type="submit" value="submit">
  </form>
</div>
</body>
</html>

