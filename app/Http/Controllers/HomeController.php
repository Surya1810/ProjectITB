<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->register_stage == 'stage_2') {
                return redirect()->route('stage_2');
            } elseif (Auth::user()->register_stage == 'stage_3') {
                return redirect()->route('stage_3');
            } else {
                return view('welcome');
            }
        } else {
            return view('welcome');
        }
    }

    public function stage_2(Request $request, $id)
    {
        if (!User::find($id)->register_stage == 'stage_3') {
            return redirect()->route('stage_3');
        } else {
            $user = User::find($id);
            $user->username = $request->username;
            $user->register_stage = 'stage_3';
            $user->save();
            return redirect()->route('stage_3');
        }
    }

    public function stage_3(Request $request, $id)
    {
        if (!User::find($id)->register_stage == 'done') {
            return redirect()->route('home');
        } else {
            $user = User::find($id);
            $user->fav_sport = $request->fav_sport;
            $user->register_stage = 'done';
            $user->save();
            return redirect()->route('home');
        }
    }
}
