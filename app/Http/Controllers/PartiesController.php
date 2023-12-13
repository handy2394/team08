<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\party;

class PartiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parties = party::all();
        return view('parties.index')->with('parties', $parties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tname = $request->input('tname');
        $chairman = $request->input('chairman');
        $secretary = $request->input('secretary');
        $standpoint = $request->input('standpoint');
        $link = $request->input('link');


        party::create([
            'tname' => $tname,
            'chairman' => $chairman,
            'secretary' => $secretary,
            'standpoint' => $standpoint,
            'link' => $link
        ]);

        return redirect('parties');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $party = party::findOrFail($id);
        $titles = $party->titles;
        return view('parties.show', ['party'=>$party, 'titles'=>$titles]);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return party::findOrFail($id)->toArray();
        return view('parties.edit', ['party' =>$party]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $party = party::findOrFail($id);
        $party->tname = $request->input('tname');
        $party->chairman = $request->input('chairman');
        $party->secretary = $request->input('secretary');
        $party->standpoint = $request->input('standpoint');
        $party->link = $request->input('link');
        $party->save();

        return redirect('parties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $party = party::findOrFail($id);
        $party->delete();
        return redirect('parties');
    }
}
