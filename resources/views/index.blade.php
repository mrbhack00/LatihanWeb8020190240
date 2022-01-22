<!DOCTYPE html>
<html>
<head>
	<title>Latihan2</title>
</head>
<body>
 
	<h2>Muhammad Naufal 8020190240</h2>
	<h3>Data Buku</h3>
 
	<a href="/bukus/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Dibuat</th>
			<th>DiUpdate</th>
		</tr>
		@foreach($bukus as $p)
		<tr>
			<td>{{ $p->id}}</td>
			<td>{{ $p->judul }}</td>
			<td>{{ $p->pengarang }}</td>
			<td>{{ $p->created_at }}</td>
            <td>{{ $p->update_at }}</td>
			<td>
				<a href="/bukus/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/bukus/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>