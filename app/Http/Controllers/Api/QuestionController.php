<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return $response = [
            'success' => true,
            'errors' => null,
            'data' => $questions
        ];
    }
    
    public function store(Request $request)
    {
        $question = Question::create($request->all());
        return response()->json($question);
    }
}
