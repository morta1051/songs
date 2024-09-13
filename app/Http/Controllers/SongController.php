<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        return view('index', ['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($index)
    {
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];

        if( $index < 1 || $index > count($songs)) {
            abort(404);
        }
        return view('show', ['song' => $songs[$index - 1]]);

        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($index)
    {
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        if( $index < 1 || $index > count($songs)) {
            return view('index', ['songs' => $songs]);
        }

        return view('edit', ['song' => $songs[$index - 1]]);


        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
