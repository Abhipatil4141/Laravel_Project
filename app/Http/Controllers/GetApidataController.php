<?php

namespace App\Http\Controllers;

use App\Models\Apidata;
use App\Models\getapiData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GetApidataController extends Controller
{
    //
    // api Routes for all data 
    public function getdata (){
        $apidata = Apidata::all();
        return response()->json($apidata);
    }




    // public function getdata($id=null){
    //     return $id?Apidata::find($id) :Apidata::all();

    // }
    // public function getdata($rfid){
    //     $apidata = DB::table("rfidusers") -> where("rfid", $rfid)->first() ;
    //     if($apidata){
    //         return response()->json([
    //             'status'=>200,
    //             'message'=> 'data fetching Successfully',
    //             'data'=> $apidata
    //         ]);}
    //         else{
    //             return response()->json([
    //                 'status'=> 401,
    //                 'message'=> 'Data Unfound in database ',
    //                 'data'=>$apidata,
    //             ]);
    //         }

    //     }
    }



    

