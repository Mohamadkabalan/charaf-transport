<?php

namespace App\Http\Controllers;


use App\Vehicle;
use DB;

class VehiclesController extends Controller
{


    function advancedSearch()
    {
        $data = request()->all();
        $vehicles = DB::table('vehicles');
        if(isset($data['manufacturer'])){
            $vehicles=$vehicles->where('brand',$data['manufacturer']);
        }
        if(isset($data['model'])){
            $vehicles=$vehicles->where('model',$data['model']);
        }
        if(isset($data['location'])){
            $vehicles=$vehicles->where('location',$data['location']);
        }
        if(isset($data['year'])){
            $vehicles=$vehicles->where('year',$data['year']);
        }
        if(isset($data['condition'])){
            $vehicles=$vehicles->where('condition',$data['condition']);
        }
        if(isset($data['transmission'])){
            $vehicles=$vehicles->where('transmission',$data['transmission']);
        }
        if(isset($data['min_price']) && isset($data['max_price'])){
            $vehicles=$vehicles->whereBetween('price', [ (int)$data['min_price'], (int)$data['max_price']]);
        }
        $vehicles=$vehicles->paginate(6);
        return view('home.advanced-search-content', compact('vehicles'))->render();

    }
    public function vehicleDetails($id){
      $vehicle=\App\Vehicle::find($id);
      return view('vehicles.vehicle-details', compact('vehicle'));
    }

}