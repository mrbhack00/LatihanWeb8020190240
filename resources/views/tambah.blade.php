<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah</title>
</head>
<body>
 
	<h2><a href="https://www.instagram.com/m_naufl/">Muhammad Naufal 8020190240</a></h2>
	<h3>Data Buku</h3>
 
	<a href="/bukus"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/bukus/store" method="post">
		{{ csrf_field() }}
		Id <input type="number" name="id" required="required"> <br/>
		Judul <input type="text" name="judul" required="required"> <br/>
		Pengarang <input type="text" name="pengarang" required="required"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>