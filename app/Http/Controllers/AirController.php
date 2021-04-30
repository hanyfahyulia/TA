<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banjir;
class AirController extends Controller
{

public function ultrasonik()
    {
        $data=Banjir::all();
        return response($data);
    }
    public function tinggi()
    {
        $data=Banjir::latest()->get();
        $air=$data->pluck('data_ultrasonik');
        return ['data_ultrasonik'=>$air];
        // return $data;
    }
    public function overview_ketinggian()
    {
        $data=Banjir::whereDate('created_at', date('Y-m-d'))->get();
        $air=$data->pluck('data_ultrasonik');
        $time=$data->pluck('created_at');
        $sum=$data->avg('data_ultrasonik');
        $terkecil=$data->min('data_ultrasonik');
        $terbesar=$data->max('data_ultrasonik');
        return ['data_ultrasonik'=>$air, 'created_at'=>$time, 'kebanyakan'=>$sum, 'kurang'=>$terkecil, 'lebih'=>$terbesar];
        // return $data;
    }
    
    

    public function index()
    {
        return Banjir::all();
    }
 
    public function show($id)
    {
        return Banjir::find($id);
    }

    public function store(Request $request)
    {
        $data = new Banjir;
        $data->id = $request->id;
        $data->data_ultrasonik = $request->data_ultrasonik;
        $data->save();
    
        return response()->json([
            "message" => "data record added"
        ], 201);
        // return Kelembapan::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Banjir::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Banjir::findOrFail($id);
        $article->delete();

        return 204;
    }
}