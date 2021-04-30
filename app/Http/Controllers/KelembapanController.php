<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelembapan;
class KelembapanController extends Controller
{

public function kelembapan()
    {
        $data=Kelembapan::all();
        return response($data);
    }
public function humidity()
    {
        $data=Kelembapan::latest()->get();
        $tanah=$data->pluck('data_kelembapan');
        return ['data_kelembapan'=>$tanah];
        // return $data;
    }
    public function overview_kelembapan()
    {
        $data=Kelembapan::whereDate('created_at', date('Y-m-d'))->get();
        $tanah=$data->pluck('data_kelembapan');
        $waktu=$data->pluck('created_at');
        $average=$data->avg('data_kelembapan');
        $minimal=$data->min('data_kelembapan');
        $maksimal=$data->max('data_kelembapan');
        return ['data_kelembapan'=>$tanah, 'created_at'=>$waktu, 'rata'=>$average, 'minimal'=>$minimal, 'maksimal'=>$maksimal];
        // return $data;
    }
    

    public function index()
    {
        return Kelembapan::all();
    }
 
    public function show($id)
    {
        return Kelembapan::find($id);
    }

    public function store(Request $request)
    {
        $data = new Kelembapan;
        // $data->id = $request->id;
        $data->data_kelembapan = $request->data_kelembapan;
        $data->save();
    
        return response()->json([
            "message" => "data record added"
        ], 201);
        // return Kelembapan::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Kelembapan::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Kelembapan::findOrFail($id);
        $article->delete();

        return 204;
    }

}

