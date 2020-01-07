<?php

namespace app\Http\Controllers;

use app\Note;
use Illuminate\Http\Request;

// $username = getFromSession('username');

class NotesController extends Controller
{
	public function index()
    {
        // $notes = App\Note::incomplete();
        $notes = app\Note::all();
        return view('notes.index', compact('notes'));
    }
    public function show($id)
    {
        $note = app\Note::find($id);
        return view('notes.show', compact('note'));
    }	

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Note  $note
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Note $note)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Note  $note
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Note $note)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Note  $note
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Note $note)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Note  $note
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Note $note)
    // {
    //     //
    // }
}
 