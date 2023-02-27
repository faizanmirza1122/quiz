<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
{
    $quizes = Quiz::all();
    return $response = [
        'success' => true,
        'errors' => null,
        'data' => $quizes
    ];
}

public function store(Request $request)
{
    $quiz = Quiz::create($request->all());
    return response()->json($quiz);
}

}
