<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\permintaan;
use App\models\tebu;

class c_permintaan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = permintaan::get();
        return view('admin/dataPermintaan' , ['data' => $data]);
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
        $datas = new permintaan;
        $datas->kadar_brix = $request['kadar_brix'];
        $datas->umur = $request['umur'];
        $datas->glukosa = $request['glukosa'];
        $datas->sukrosa = $request['sukrosa'];
        $datas->bobot_stok = $request['bobot_stok'];
        $datas->dikirim = $request['dikirim'];
        $datas->perkiraan_tiba = $request['perkiraan_tiba'];   
        $x = $datas['kadar_brix']*0.35 + $datas['sukrosa'] *0.175+ $datas['glukosa'] *0.225 +$datas['umur'] *0.25;
        $datas->kualitas = $x *2.91;    
        $datas->save();
        $datas = permintaan::get();
        $data = tebu::where('id_tebu',$request['id_tebu'])->first();
        $data->delete();
        $data = tebu::with('get_lahan')->get();
        return view('beranda', compact('data','datas'));

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
        $data = permintaan::find($id);
        $data->kadar_brix = $request['kadar_brix'];
        $data->umur = $request['umur'];
        $data->glukosa = $request['glukosa'];
        $data->sukrosa = $request['sukrosa'];
        $data->umur = $request['umur'];
        $data->dikirim = $request['dikirim'];
        $data->perkiraan_tiba = $request['perkiraan_tiba'];
        $data->save();
        $data = permintaan::get();
        return view('admin/dataPermintaan', ['data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = permintaan::find($id);
        $data->delete();
        $data = permintaan::get();
        return view('admin/dataPermintaan', ['data' => $data]);
    }
    public function search(Request $request)
    {
        $i = 0;
        
        if($request->ajax())
            {
                $output = " ";
                $total = $request->kadar_brix * 0.35 + $request->sukrosa *0.175+ $request->glukosa *0.225 +$request->umur *0.25;
                $z = $total *2.91;    
                $x= $z - 5;
                $y = $z + 5;
                $products=  tebu::whereBetween('kualitas', [$x, $y])->get();;
            if($products)
                {
                    foreach ($products as $key => $product) {
                    $output.='
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>'.$product->get_lahan->lahan.'</strong>
                    <p>Stok     :'.$product->stok.'</p>
                    <p>Kadar Brix   :'.$product->kadar_brick.'</p>
                    <p>Glukosa  :'.$product->glukosa.'</p>
                    <p>Sukrosa  :'.$product->sukrosa.'</p>
                    <a href="#portfolio">Lebih Lanjut</a>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                    }
                return Response($output);
                }
        }
    }
}
