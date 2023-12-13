<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\title;
use App\Models\party;

class TitlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = Title::all();
        return view('titles.index')->with('titles', $titles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parties = Team::orderBy('parties.id', 'asc')->pluck('parties.name', 'parties.id');
        return view('parties.create', ['parties' =>$parties, 'PartySelected' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $gender = $request->input('gender');
        $session = $request->input('session');
        $title = $request->input('title');
        $city = $request->input('city');
        $birthday = $request->input('birthday');
        $address = $request->input('address');
        $website = $request->input('website');
        $tid = $request->input('tid');

        $player = Player::create([
            'name'=>$name,
            'gender'=>$gender,
            'session'=>$session,
            'title'=>$title,
            'city'=>$city,
            'birthday'=>$birthday,
            'address'=>$address,
            'website'=>$website,
            'tid'=>$tid]);
            
        return redirect('titles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title=Title::findOrFail($id);
        return view('titles.show')->with('title', $title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Title::findOrFail($id)->toArray();
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
        $player = Title::findOrFail($id);
        $player->name = $request->input('name');
        $player->gender = $request->input('gender');
        $player->session = $request->input('session');
        $player->title = $request->input('title');
        $player->city = $request->input('city');
        $player->birthday = $request->input('birthday');
        $player->address = $request->input('address');
        $player->website = $request->input('website');
        $player->tid = $request->input('tid');

        $player->save();

        return redirect('titles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $title = title::findOrFail($id);
        $title->delete();
        return redirect('titles');
    }
}
