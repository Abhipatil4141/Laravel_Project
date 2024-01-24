<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Apidata;

class UserIdApi extends Controller
{
    public function userid($rfid){
        $apidata = DB::table("apidatas") -> where("rfidno", $rfid)->get();
        if($apidata){
            return response()->json([
                'status'=>200,
                'message'=> 'fetch data Successfully from UserId',
                'data'=> $apidata]);
            }
        else{
            return response()->json([
            'status' => 404,
            'message' => 'No data found for the given UserId']);
        }
    }

}
