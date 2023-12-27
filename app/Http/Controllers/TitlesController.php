<?php

namespace App\Http\Controllers;


use App\Models\Title;
use App\Models\Party;
use App\Http\Requests\CreateTitleRequest;
use Illuminate\Http\Request;

class TitlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = title::paginate(25);
        $cities = title::allcities()->pluck('titles.city', 'titles.city');
        return view('titles.index', ['titles' => $titles, 'cities'=>$cities,'selectedPosition'=>null]);
        //return Titles::all()->toArray();
    }


    public function session()
    {
        // 從 Model 拿特定條件下的資料
        $titles = Title::session()->paginate(25);
        $cities = title::allcities()->pluck('titles.city', 'titles.city');
        // 把資料送給 view
        return view('titles.index', ['titles' => $titles, 'cities'=>$cities,'selectedPosition'=>null]);
        
    }


    public function city(Request $request)
    {
        $titles = Title::city($request->input('ci'))->paginate(25);
        $cities = Title::allCities()->pluck('titles.city', 'titles.city');
        $selectedPosition = $request->input('ci');
        return view('titles.index', ['titles' => $titles, 'cities'=>$cities,'selectedPosition'=>$selectedPosition]);
    }  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $parties = Party::orderBy('parties.id', 'asc')->pluck('parties.tname', 'parties.id');
        return view('titles.create', ['parties' =>$parties, 'partySelected' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTitleRequest $request)
    {
        //
        $name = $request->input('name');
        $gender = $request->input('gender');
        $session = $request->input('session');
        $title = $request->input('title');
        $city = $request->input('city');
        $birthday = $request->input('birthday');
        $area = $request->input('area');
        $cellphone = $request->input('cellphone');
        $address = $request->input('address');
        $website = $request->input('website');
        $tid = $request->input('tid');


        $title = Title::create([
            'name'=>$name,
            'gender'=>$gender,
            'session'=>$session,
            'title'=>$title,
            'city'=>$city,
            'birthday'=>$birthday,
            'area'=>$area,
            'cellphone'=>$cellphone,
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
        $title = Title::findOrFail($id);
        return  view('titles.show')->with('title', $title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = title::findOrFail($id);
        $parties = party::orderBy('parties.id', 'asc')->pluck('parties.tname', 'parties.id');
        $selected_tags = $title->party->id;
        return view('titles.edit', ['title' =>$title, 'parties' => $parties, 'partySelected' => $selected_tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateTitleRequest $request, $id)
    {
        //
        $title = Title::findOrFail($id);

        $title->name = $request->input('name');
        $title->gender = $request->input('gender');
        $title->session = $request->input('session');
        $title->title = $request->input('title');
        $title->city = $request->input('city');
        $title->birthday = $request->input('birthday');
        $title->area = $request->input('area');
        $title->cellphone = $request->input('cellphone');
        $title->address = $request->input('address');
        $title->website = $request->input('website');
        $title->tid = $request->input('tid');
        $title->save();

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
        //
        $title = Title::findOrFail($id);
        $title->delete();
        return redirect('titles');
    }
}
