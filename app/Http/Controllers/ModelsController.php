<?php

namespace App\Http\Controllers;


use App\VehicleModel;
use DB;

class ModelsController extends Controller
{

    function index()
    {
        $data = DB::table('blogs')->paginate(6);
        return view('blogs.index', compact('data'));
    }

    function getModels()
    {
        $data = request()->all();
        $manufacturer_id = $data['manufacturer_id'];
        $models = VehicleModel::where('manufacturer_id', $manufacturer_id)->get();
        return response()->json([
            'models' => $models, 'message' => 'success', 'status' => 200
        ], 200);
    }

}