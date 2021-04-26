<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ujian;

class UjianController extends Controller
{
    public function index()
    {
    	$ujian = Ujian::all();
    	return view('ujian', ['ujian' => $ujian]);
    }
    public function tambah()
    {
    	return view('ujian_tambah');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama_mk' => 'required',
    		'dosen' => 'required',
            'jumlah_soal' => 'required',
            'keterangan' => 'required'
    	]);
 
        Ujian::create([
    		'nama_mk' => $request->nama_mk,
    		'dosen' => $request->dosen,
            'jumlah_soal' => $request->jumlah_soal,
            'keterangan' => $request->keterangan
    	]);
 
    	return redirect('/ujian');
    }
    public function edit($id)
    {
        $ujian = Ujian::find($id);
        return view('ujian_edit', ['ujian' => $ujian]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama_mk' => 'required',
    		'dosen' => 'required',
            'jumlah_soal' => 'required',
            'keterangan' => 'required'
            ]);
            $ujian = Ujian::find($id);
            $ujian->nama_mk = $request->nama_mk;
            $ujian->dosen = $request->dosen;
            $ujian -> jumlah_soal = $request->jumlah_soal;
            $ujian -> keterangan = $request->keterangan;
            $ujian->save();
            return redirect('/ujian');
        }
        public function delete($id)
        {
            $ujian = Ujian::find($id);
            $ujian->delete();
            return redirect('/ujian');
        }
}
