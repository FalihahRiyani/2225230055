<?php

namespace App\Http\Controllers;

use App\Models\_falihah;
use Illuminate\Http\Request;

class falihah3 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data=_falihah::all(); 
       return view('isian.tampildata')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('isian.uas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate ([
            'Nama'=> 'required',
            'Email'=> 'required',
            'No'=> 'required',
            'Judul'=> 'required',
            'Tanggal'=> 'required',
            'Lama'=> 'required'
        ]);
        $data=[
          'Nama'=>$request->input('Nama'),
          'Email'=>$request->input('Email'),
          'No'=>$request->input('No'),
          'Judul'=>$request->input('Judul'),
          'Tanggal'=>$request->input('Tanggal'),
          'Lama'=>$request->input('Lama')
        ];
        _falihah::create($data);
        return redirect('isian');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = _falihah::where('Nama', $id)->first();
        return view ('isian.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate ([
            'Nama'=> 'required',
            'Email'=> 'required',
            'No'=> 'required',
            'Judul'=> 'required',
            'Tanggal'=> 'required',
            'Lama'=> 'required'
        ]);
        $data=[
          'Nama'=>$request->input('Nama'),
          'Email'=>$request->input('Email'),
          'No'=>$request->input('No'),
          'Judul'=>$request->input('Judul'),
          'Tanggal'=>$request->input('Tanggal'),
          'Lama'=>$request->input('Lama')
        ];
        _falihah::where('Nama', $id)->update($data);
        return redirect('/isian')->with ('success', 'Data Berhasil DiUpdate!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        _falihah::where('Nama', $id)->delete();
        return redirect('/isian')->with ('success', 'Data Berhasil DiHapus!');
    }
}
