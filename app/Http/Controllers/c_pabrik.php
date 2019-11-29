<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\pabrik;

class c_pabrik extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pabrik::get();
        return view('admin/dataPabrik' , ['data' => $data]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new pabrik;
        $data->nama_pabrik = $request['nama_pabrik'];
        $data->lokasi_pabrik = $request['lokasi_pabrik'];
        $data->kapasitas_gudang = $request['kapasitas_gudang'];
        $data->save();
        $data = pabrik::get();
        return view('admin/dataPabrik', ['data' => $data]);
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
        $data = pabrik::find($id);
        $data->nama_pabrik = $request['nama_pabrik'];
        $data->lokasi_pabrik = $request['lokasi_pabrik'];
        $data->kapasitas_gudang = $request['kapasitas_gudang'];
        $data->save();
        $data = pabrik::get();
        return view('admin/dataPabrik', ['data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = pabrik::find($id);
        $data->delete();
        $data = pabrik::get();
        return view('admin/dataPabrik', ['data' => $data]);
    }
}
