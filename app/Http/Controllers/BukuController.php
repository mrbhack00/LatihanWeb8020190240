<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
    	
    	$bukus = DB::table('bukus')->get();
 
    	
    	return view('index',['bukus' => $bukus]);
    }

    public function tambah()
{
 
	
	return view('tambah');
 
}

public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('bukus')->insert([
		'id' => $request->id,
		'judul' => $request->judul,
		'pengarang' => $request->pengarang,
		
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/bukus');
}

// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$bukus = DB::table('bukus')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['bukus' => $bukus]);

}

// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('bukus')->where('id',$request->id)->update([
		'id' => $request->id,
		'judul' => $request->judul,
		'pengarang' => $request->pengarang,
		
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/bukus');
}
// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('bukus')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/bukus');
}

}
