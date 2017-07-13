<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use function redirect;
use Route;
use function view;

class QuestionController extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function actionAskQuestion()
    {
        if (!Auth::check()) {
            redirect()->route('home');
        }
        return view('question');
    }

    public function actionPublishQuestion()
    {
        dd($this->request->all());

        return view('question_publish');
    }

    public function actionHome()
    {
        return view('home');
    }

}
