<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\identifikasi;
use App\models\kategori;

class c_identifikasi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = identifikasi::with('get_kategori')->get();
        return view('admin/dataIdentifikasi', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new identifikasi;
        $data->penyakit = $request['penyakit'];
        $data->tips = $request['tips'];
        $data->kategori = $request['kategori'];
        $data->save();
        $data = identifikasi::with('get_kategori')->get();
        return view('admin/dataIdentifikasi', ['data' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $data = identifikasi::find($id);
        $data->penyakit = $request['penyakit'];
        $data->tips = $request['tips'];
        $data->kategori = $request['kategori'];
        $data->save();
        $data = identifikasi::with('get_kategori')->get();
        return view('admin/dataIdentifikasi', ['data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = identifikasi::find($id);
        $data->delete();
        $data = identifikasi::with('get_kategori')->get();
        return view('admin/dataIdentifikasi', ['data' => $data]);
    }
}
