<?php
/**
 * Created by PhpStorm.
 * User: EDO
 * Date: 7/13/2017
 * Time: 1:16 AM
 */

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Question;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $questions = $request->user()->question;
        return view('account.questions.index', compact('questions'));
    }

    public function question()
    {
        return view('account.questions.index');
    }

    public function create()
    {
        return view('question.create');
    }

    public function add(Request $request)
    {

        $data = $request->input();
        return Question::create([
                'title' => $data['title'],
                'content' => 'cont',
                'user_id' => Auth::id(),
            ]
        );
    }
}