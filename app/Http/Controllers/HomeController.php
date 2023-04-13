<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
            // dd($request);
            $request->validate([
                'username' => 'bail|required|unique:users,username',
                'profile' => 'required'
            ]);
            $user = User::find($id);
            $user->username = $request->username;
            $data = $request->file('profile');
            if (isset($data)) {
                $fileName = $user->id . '.' . $data->getClientOriginalExtension();
                if (!Storage::disk('public')->exists('profile/')) {
                    Storage::disk('public')->makeDirectory('profile/');
                }
                $data->move('storage/profile/', $fileName);
                $user->picture = $fileName;
            }
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
            return redirect()->route('home')->with(['pesan' => 'Your account is fully setup', 'level-alert' => 'alert-success']);
        }
    }
}
