<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //ensure we ONLY show appointments for authenticated user
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('appointments', $user->appointments);
    }

    public function advisor()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('advisor')->with('schedules', $user->schedules);;
    }
}

