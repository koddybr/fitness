<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alimento;

class FitlabelAndroidController extends Controller
{
    public function getAlimentos(){
        $alimentos = Alimento::get();
        $data = [
            'alimentos' => $alimentos
        ];
        return response()->json($data);
    }
}
