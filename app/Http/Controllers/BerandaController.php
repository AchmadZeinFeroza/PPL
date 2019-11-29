<?php

namespace App\Http\Controllers;
use App\models\tebu;
use App\models\lahan;
use App\models\identifikasi;
use App\models\kategori;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tebu::with('get_lahan')->orderBy('kualitas' , 'desc')->get();
        // $identifikasi = identifikasi::with('get_kategori')->get();
        
        // foreach($data as $datas){
        //     $bobot_tebu = $datas->bobot;
        //     $air_nira = $datas->kadar_brick;
        //     $tinggi = $datas->tinggi;
        //     $hasil = [];
            
        //     if((int)$air_nira <=19.75){
        //         $hasil[] =   identifikasi::with('get_kategori')->where('kategori' , 1);
        //     }
        //     if((int)$bobot_tebu <=7){
        //         $hasil[] =  identifikasi::with('get_kategori')->where('kategori' , 2);
        //     }
        //      if((int)$tinggi <= 3){
        //         $hasil[] =   identifikasi::with('get_kategori')->where('kategori' , 3);;
        //     }

        // }
        // dd($hasil[1]);
        $air_nira = identifikasi::where('kategori',1)->get();
        $bobot = identifikasi::where('kategori',2)->get();
        $tinggi = identifikasi::where('kategori',3)->get();
        return view('beranda', compact('data','bobot','air_nira','tinggi'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
