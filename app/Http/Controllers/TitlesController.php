<?php

namespace App\Http\Controllers;

use App\Models\title;
use App\Models\party;
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
        $city = Title::allCity()->pluck('titles.city', 'titles.city');
        
        return view('titles.index', ['titles' => $titles, 'city'=>$city, 'citySelected'=>null]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function city(Request $request)
    {
        $titles = Title::city($request->input('pos'))->paginate(25);
        $city = Title::allCity()->pluck('titles.city', 'titles.city');
        $citySelected = $request->input('pos');
        return view('titles.index', ['titles' => $titles,'city'=>$city, 'citySelected'=>$citySelected]);
    }   

    public function create()
    {
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
        $request->validate([
            'name'=>'required|string|min:1|max:99',
            'gender'=>'required|string|min:1|max:5',
            'session'=>'required|numeric|min:0|max:9999',
            'title'=>'required|string|min:2|max:20',
            'city'=>'required|string|min:0|max:20',
            'birthday'=>'required',
            'area'=>'required|string|min:0|max:20',
            'cellphone'=>'required|numeric',
            'address'=>'required',
            'website'=>'required',
            'tid'=>'required'
        ],[
            "name.required" => "議員名稱 為必填",
            "name.max" => "議員名稱 必須介於1~99個字元",
            "name.min" => "議員名稱 必須介於1~99個字元",
            "gender.required" => "議員性別 為必填",
            "gender.string"=>"議員性別 必須為中文",
            "gender.max" => "議員性別 必須介於1~20個字元",
            "gender.min" => "議員性別 必須介於1~20個字元",
            "session.required"=>"議員屆數 為必填",
            "session.numeric"=>"議員屆數 必須為數字",
            "title.required" => "議員職務 為必填",
            "title.string"=>"議員職務 必須為中文",
            "title.min"=>"議員職務 必須介於1~20個字元",
            "title.max"=>"議員職務 必須介於1~20個字元",
            "city.required" => "縣市 為必填",
            "city.string"=>"縣市 必須為中文",
            "city.min"=>"必須介於1~20個字元",
            "city.max"=>"必須介於1~20個字元",
            "area.required" => "選區 為必填",
            "area.string"=>"選區 必須為中文",
            "area.min"=>"必須介於1~20個字元",
            "area.max"=>"必須介於1~20個字元",
            "cellphone.required"=>"電話 為必填",
            "cellphone.numeric"=>"電話 必須為數字",
            "address.required" => "地址 為必填",
            "website.required" => "個人網頁 為必填",
            "tid.required" => "政黨 為必填",

    ]);

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
            'tid'=>$tid
        ]);
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
        
        return view('titles.show')->with('title',$title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = Title::findOrFail($id);
        $parties = Party::orderBy('parties.id', 'asc')->pluck('parties.tname', 'parties.id');
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
        $title = Title::findOrFail($id);
        $title->delete();
        return redirect('titles');
    }
}
