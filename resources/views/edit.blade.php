<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>

	<h2><a href="https://www.instagram.com/m_naufl">Muhammad Naufal 8020190240</a></h2>
	<h3>Edit Buku</h3>

	<a href="/bukus"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($bukus as $p)
	<form action="/bukus/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
        ID<input type="text" required="required" name="judul" value="{{ $p->id }}"> <br/>
		Judul <input type="text" required="required" name="judul" value="{{ $p->judul }}"> <br/>
		Pengarang <input type="text" required="required" name="pengarang" value="{{ $p->pengarang }}"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>