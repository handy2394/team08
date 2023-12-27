<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;
use App\Models\Party;
use App\Http\Requests\CreateTitleRequest;


class TitlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $titles=Title::paginate(25);
        $citys=Title::allcitys()->pluck('titles.city','titles.city');
        return view("titles.index",['titles' => $titles, 'citys'=>$citys,'selectedcity'=>null]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $request->validate
        (
          [
            'name' => 'required|string|min:1|max:100',
            'gender' => 'required|string|min:1|max:2',
            'session' => 'required|numeric|min:1|max:100',
            'title' => 'required|string|min:2|max:2',
            'city' => 'required|string|min:3|max:3',
            'birthday' => 'required',
            'area' => 'required|string|min:2|max:3',
            'cellphone' =>'required|numeric',
            'address' => 'required',
            'website' => 'required',
            'tid' => 'required'
          ], //驗證規則
          [
             "name.required" => "議員名稱(必填)",
             "name.min" => "議員名稱 至少需1個字元",
             "gender.required" => "性別(必填)",
             "gender.min" => "性別 範圍介於1~2字元",
             "gender.max" => "性別 範圍介於1~2字元",
             "seassion.required" => "屆(必填)",
             "seassion.min" => "屆 至少1個字元",
             "title.required" => "職務(必填)",
             "title.min" => "職務 為2字元",
             "title.max" => "職務 為2字元",
             "city.required" => "縣市(必填)",
             "city.min" => "縣市 範圍介於2~3之間",
             "city.max" => "縣市 範圍介於2~3之間",
             "birthday" => "生日(必填)",
             "area.required" => "選區(必填)",
             "area.min" => '選區 範圍介於2~3之間',
             "area.max" => '選區 範圍介於2~3之間',
             "cellphone.required" => "電話(必填)",
             "address.required" => "通訊處地址(必填)",
             "website.required" => "個人網站(必填)",
             "tid.required"=>'政黨(必填)'
          ],//錯誤訊息
        );

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
        $title=Title::findOrFail($id);
        return view('titles.show')->with('title',$title) ;
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

    
    public function men()
    {
        $titles = Title::gender("男")->paginate(25);
        $citys=Title::allcitys()->pluck('titles.city','titles.city');
        return view("titles.index",['titles' => $titles, 'citys'=>$citys,'selectedcity'=>null]);
    }
    public function girl()
    {
        $titles = Title::gender("女")->paginate(25);
        $citys=Title::allcitys()->pluck('titles.city','titles.city');
        return view("titles.index",['titles' => $titles, 'citys'=>$citys,'selectedcity'=>null]);
    }
    public function no()
    {
        $titles = Title::gender("不公開")->paginate(25);
        $citys=Title::allcitys()->pluck('titles.city','titles.city');
        return view("titles.index",['titles' => $titles, 'citys'=>$citys,'selectedcity'=>null]);
    }
    public function city(Request $request)
    {
        $titles=Title::city($request->input('pos'))->paginate(25);
        $citys=Title::allcitys()->pluck('titles.city','titles.city');
        $selectedcity = $request->input('pos');
        return view('titles.index',['titles'=>$titles,'citys'=>$citys,'selectedcity'=>$selectedcity]);
    }
    

}
