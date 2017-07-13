<?php
/**
 * Created by PhpStorm.
 * User: EDO
 * Date: 7/12/2017
 * Time: 6:50 PM
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{

    public function index()
    {

        return view('account.index');
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