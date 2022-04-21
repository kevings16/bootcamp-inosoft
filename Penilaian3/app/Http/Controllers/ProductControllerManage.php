<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControllerManage extends Controller
{
    public function getDataProduct(){
        $path = base_path()."/resources/js/components/data.json";
        $json = json_decode(file_get_contents($path),true);
        return response()->json($json);
    }
}
