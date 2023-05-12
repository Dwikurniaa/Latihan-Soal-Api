<?php

namespace App\Http\Controllers;

use App\Models\Quizzes;
use App\Models\QuestionbankQuizzes;
use App\Http\Resources\QuestionsResource;
use Illuminate\Http\Request;

class ListAllQuestionsController extends Controller
{

    public function index()
    {
        $questions = Quizzes::get();
        return QuestionsResource::collection($questions);
    }

    public function show($id)
    {
        $questions = Quizzes::with('question')->findOrFail($id);
        return new QuestionsResource($questions);
    }

    public function update(Request $request, $id)
    {
        $answer = QuestionbankQuizzes::find($id);
        $answer->update($request->all());
        $response = [
            'success' => true,
            'msg' => 'Success'
        ];

        return response()->json($response);
    }
}
