<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Proposal;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(User $user)
    {   $user_id = \Auth::id();
        $user = User::find($user_id);
        if($user->type=='admin')
        {
            return redirect()->route('admin');
        }
        return view('home');
    }

}
