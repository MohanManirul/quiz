<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DistrictController extends Controller
{
    //index function start
    public function index(){
        // return $all_districts = District::select("id","name")->get();
        return view("backend.modules.districts.index");
    }
    
     //data function start
     public function data(){

            $all_districts = District::select("id","name")->get();
            return DataTables::of($all_districts)->make(true);        
        
    }
    //data function end
}
