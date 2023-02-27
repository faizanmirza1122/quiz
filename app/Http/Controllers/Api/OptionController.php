<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index()
    {
        $options = Option::all();
        // return response()->json($options);
        return $response = [
            'success' => true,
            'errors' => null,
            'data' => $options
        ];
    }
    
    public function store(Request $request)
    {
        $option = Option::create($request->all());
        return response()->json($option);
    }
}
