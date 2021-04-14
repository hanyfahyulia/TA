<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Getaran;
class MpuController extends Controller
{

public function mpu()
    {
        $data=Getaran::all();
        return response($data);
    }
    public function soil()
    {
        $data=Getaran::latest()->get();
        $lempung=$data->pluck('data_pergeseran_tanah');
        return ['data_pergeseran_tanah'=>$lempung];
        // return $data;
    }
    public function index()
    {
        return Getaran::all();
    }
 
    public function show($id)
    {
        return Getaran::find($id);
    }

    public function store(Request $request)
    {
        $data = new Getaran;
        $data->id = $request->id;
        $data->data_pergeseran_tanah = $request->data_pergeseran_tanah;
        $data->save();
    
        return response()->json([
            "message" => "data record added"
        ], 201);
        // return Kelembapan::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Getaran::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Getaran::findOrFail($id);
        $article->delete();

        return 204;
    }
}