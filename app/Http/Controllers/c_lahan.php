<?php

namespace App\Http\Controllers;

use App\models\tebu;
use App\models\lahan;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class c_lahan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tebu::with('get_lahan')->get();
        return view('admin/dataLahan' , ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/tambahLahan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {

        $data = new tebu;
        $umur=$request['umur'];
        $air_nira = $request['kadar_brick'];
        $bobot_tebu = $request['bobot_tebu'];
        $tinggi = $request['tinggi'];
        
        if((int)$umur > 12){
            $umur = 25;
        }else if((int)$umur >=8 && (int)$umur < 10 ){
            $umur = 16.67;
        }else if((int)$umur >=10 && (int)$umur <=12){
            $umur = 8.33;
        }else{
            $umur = 0;
        }
        if((int)$air_nira > 18.17 && (int)$air_nira<=18.66){
            $kadar_brick = 35;
        }else if((int)$air_nira > 18.66 && (int)$air_nira <= 19.16 ){
            $kadar_brick = 23.333;
        }else if((int)$air_nira >=19.16 && (int)$air_nira <=19.75){
            $kadar_brick = 11.66;
        }else{
            $kadar_brick = 0;
        }
        if((int)$bobot_tebu > 8){
            $bobot_tebu = 15;
        }else if((int)$bobot_tebu > 7 && (int)$bobot_tebu <= 8 ){
            $bobot_tebu = 10;
        }else if((int)$bobot_tebu >=6 && (int)$bobot_tebu <=7){
            $bobot_tebu = 5;
        }else{
            $bobot_tebu = 0;
        }
        if((int)$tinggi === 5 ){
            $tinggi = 25;
        }else if((int)$tinggi === 4 ){
            $tinggi = 16.67;
        }else if((int)$tinggi === 3){
            $tinggi = 8.33;
        }else if((int)$tinggi === 2){
            $tinggi = 0;
        }
        $x = $umur + $kadar_brick + $bobot_tebu + $tinggi;
        $data->kualitas = $x;
        $data->umur = $request['umur'];
        $data->bobot_tebu = $request['bobot_tebu'];
        $data->tinggi = $request['tinggi'];
        $data->kadar_brick = $request['kadar_brick'];
        $data->id_lahan = $request['id_lahan'];
        $data->save();
        $data = tebu::with('get_lahan')->get();
        return view('admin/dataLahan', ['data' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = tebu::find($id);
        return view('tebu_detail' , ['data' => $data]);
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
        
        $data = tebu::find($id);
        $umur=$request['umur'];
        $air_nira = $request['kadar_brick'];
        $bobot_tebu = $request['bobot_tebu'];
        $tinggi = $request['tinggi'];
        
        if((int)$umur > 12){
            $umur = 25;
        }else if((int)$umur >=8 && (int)$umur < 10 ){
            $umur = 16.67;
        }else if((int)$umur >=10 && (int)$umur <=12){
            $umur = 8.33;
        }else{
            $umur = 0;
        }
        if((int)$air_nira > 18.17 && (int)$air_nira <= 18.66){
            $kadar_brick = 35;
        }else if((int)$air_nira > 18.66 && (int)$air_nira <= 19.16 ){
            $kadar_brick = 23.333;
        }else if((int)$air_nira >=19.16 && (int)$air_nira <=19.75){
            $kadar_brick = 11.66;
        }else{
            $kadar_brick = 0;
        }
        if((int)$bobot_tebu > 8){
            $bobot_tebu = 15;
        }else if((int)$bobot_tebu > 7 && (int)$bobot_tebu <= 8 ){
            $bobot_tebu = 10;
        }else if((int)$bobot_tebu >=6 && (int)$bobot_tebu <=7){
            $bobot_tebu = 5;
        }else{
            $bobot_tebu = 0;
        }
        if((int)$tinggi === 5 ){
            $tinggi = 25;
        }else if((int)$tinggi === 4 ){
            $tinggi = 16.67;
        }else if((int)$tinggi === 3){
            $tinggi = 8.33;
        }else if((int)$tinggi === 2){
            $tinggi = 0;
        }
        $x = $umur + $kadar_brick + $bobot_tebu + $tinggi;
        $data->kualitas = $x;
        $data->umur = $request['umur'];
        $data->bobot_tebu = $request['bobot_tebu'];
        $data->tinggi = $request['tinggi'];
        $data->kadar_brick = $request['kadar_brick'];
        $data->save();
        $data = tebu::with('get_lahan')->get();
        return view('admin/dataLahan', ['data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = tebu::find($id);
        $data->delete();
        $data = tebu::with('get_lahan')->get();
        return view('admin/dataLahan', ['data' => $data]);
    }
}
