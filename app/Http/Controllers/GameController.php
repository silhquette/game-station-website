<?php

namespace App\Http\Controllers;

use App\Models\game;
use App\Models\Library;
use App\Http\Requests\StoregameRequest;
use App\Http\Requests\UpdategameRequest;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('post.index', [
            'pageTitle' => 'Store Page : all games',
            'active' => 'store',
            'games' => game::all(),
            'rows' => ceil(count(game::all())/4),
            'limit' => 4,
            'skip' => 0
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home', [
            'pageTitle' => 'Home Page : all games',
            'active' => 'store',
            'games' => game::all(),
            'sIndex' => 1,
            'iIndex' => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoregameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi data
        $validated = $request->validate([
            'user_id' => 'numeric|required',
            'game_id' => 'numeric|required'
        ]);

        // masukkan kedalam mysql
        Library::create($validated);

        // membuat flash massage
        $request->session()->flash('success', 'Items successfully added');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(game $game)
    {
        return view('post.details', [
            'active' => 'store',
            'pageTitle' => 'Game Details : ' . $game->title,
            'game' => $game,
            'postDate' => date("F d, Y", strtotime("$game->created_at"))
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategameRequest  $request
     * @param  \App\Models\game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategameRequest $request, game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(game $game)
    {
        //
    }
}
