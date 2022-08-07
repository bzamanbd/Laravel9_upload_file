<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function geData(Request $req){
        $fileName = $req->file('doc')->getClientOriginalName();
        return $req->file('doc')->storeAs('img',$fileName);
    }
}