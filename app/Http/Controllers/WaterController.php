<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
class WaterController extends Controller
{

public function level()
    {
        $data=Level::all();
        return response($data);
    }
    public function banyu()
    {
        $data=Level::latest()->get();
        $tirto=$data->pluck('data_water_level');
        return ['data_water_level'=>$tirto];
        // return $data;
    }
    public function index()
    {
        return Level::all();
    }
 
    public function show($id)
    {
        return Level::find($id);
    }

    public function store(Request $request)
    {
        $data = new Level;
        $data->id = $request->id;
        $data->data_water_level = $request->data_water_level;
        $data->save();
    
        return response()->json([
            "message" => "data record added"
        ], 201);
        // return Kelembapan::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Level::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Level::findOrFail($id);
        $article->delete();

        return 204;
    }
}