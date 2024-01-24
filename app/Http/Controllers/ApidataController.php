<?php

namespace App\Http\Controllers;

use App\Models\Apidata;
use Illuminate\Http\Request;

class ApidataController extends Controller
{
    //
    public function apidata(Request $request)
    {
        $request->validate([
            'rfidno' => 'required|string',
            'status' => 'required|string',
            'userId' => 'required|string',
        ]);



        $record = new Apidata;

        $record->rfidno = $request['rfidno'];
        $record->status = $request['status'];
        $record->userId = $request['userId'];
        $record->save();
        return response()->json($record);
    }
}

