<?php

namespace App\Http\Controllers;
// use App\Jawaban;
// use App\Pertanyaan;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index($id)
    {	
    	$pertanyaan = \App\Pertanyaan::find($id);
    	$jawaban = \App\Jawaban::all();
    	// dd($pertanyaan->jawaban);
    	return view('jawaban.index', ['pertanyaan' => $pertanyaan, 'jawaban'=> $jawaban]);
    }

    public function store(Request $request,$id)
    {
    	// dd($request->all());
    	$jawaban = new \App\Jawaban;
    	$jawaban->pertanyaan_id = $request->get('pertanyaan_id');
    	$jawaban->isi = $request->get('isi');
    	$jawaban->save();
    	// $jawaban = \App\Jawaban::create($request->all());
    	return redirect('/pertanyaan');
    }

    public function edit(Request $req, $id)
    {
        $jawaban = \App\Jawaban::find($id);
        //dd($siswa); daydam buat ngecek saja.
        return view('jawaban.edit',['jawaban'=>$jawaban]);
    }

    public function update (Request $req, $id)
    {
        $jawaban = \App\Jawaban::find($id);
        $jawaban->update($req->all());
        return redirect('/pertanyaan');
    }

    public function delete($id)
    {
        $jawaban = \App\Jawaban::find($id);
        $jawaban->delete($jawaban);
        return redirect('/pertanyaan');
    }
}
