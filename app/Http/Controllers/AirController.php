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
        $data=Banjir::latest()->first();
        $air=$data->pluck('data_ultrasonik');
        return ['data_ultrasonik'=>$air];
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