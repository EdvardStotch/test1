<?php

/**
 * Created by PhpStorm.
 * User: EDO
 * Date: 7/13/2017
 * Time: 12:56 AM
 */
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{

    public function index(Request $request)
    {
//        $answeredMe = $request->user()->question->load('answer');
//TODO add eager loading count
        $questions = $request->user()->question;
        $answers = $request->user()->answer;
//        $answeredMe = $request->user()->question->answer;
//        TODO add comments
        return view('account.elements.dashboard', compact('questions', 'answers'));
    }

    public function change()
    {
        return view('account.change');
    }

    public function about()
    {
        return view('account.about');
    }

    public function update(Request $request)
    {
        $data = $request->input();

        $user = User::where('id', Auth::id())->first()
            ->update([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email']
            ]);

        if ($user) {
            return redirect('/account');
        }

        return redirect('/');
    }
}