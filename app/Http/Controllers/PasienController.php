<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Pasien;
class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = M_Pasien::all();
        return view('index')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'umur' => ['required'],
            'alamat' => ['required'],
            'status' => ['nullable'],
            'tgllahir' => ['nullable'],
            'jeniskelamin' => ['nullable'],
            'keluhan' => ['nullable']
        ]);

        $data = new M_Pasien;
        $data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->alamat = $request->alamat;
        $data->status= $request->status;
        $data->tgllahir= $request->tgllahir;
        $data->jeniskelamin = $request->jeniskelamin;
        $data->keluhan = $request->keluhan;
        $data->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_Pasien::findOrFail($id);
        return view('layouts.show')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = M_Pasien::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_Pasien::findOrFail($id);
        $item->delete();
        return redirect('/');

    }
}
