<?php

namespace App\Http\Controllers;

use App\Models\Buddy;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BuddyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', '!=', Auth::user()->id)->get()->shuffle();
        // dd($user);
        return view('buddy.index', compact('user'));
    }

    public function match($id)
    {
        $user = User::find($id);
        return view('buddy.detail', compact('user'));
    }

    public function arrange()
    {
        return redirect()->route('buddy.index')->with(['pesan' => 'Meet Arranged', 'level-alert' => 'alert-success']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buddy  $buddy
     * @return \Illuminate\Http\Response
     */
    public function show(Buddy $buddy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buddy  $buddy
     * @return \Illuminate\Http\Response
     */
    public function edit(Buddy $buddy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buddy  $buddy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buddy $buddy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buddy  $buddy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buddy $buddy)
    {
        //
    }
}
