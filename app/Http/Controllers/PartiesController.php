<?php

namespace App\Http\Controllers;


use App\Models\Party;
use Illuminate\Http\Request;

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
        //return Party::all()->toArray();
    }

    public function green()
    {
        // 從 Model 拿資料
        $parties = Party::standpoint('泛綠')->get();
        // 把資料送給 view
        return view('parties.index')->with('parties', $parties);
    }


    public function blue()
    {
        // 從 Model 拿資料
        $parties = Party::standpoint('泛藍')->get();
        // 把資料送給 view
        return view('parties.index')->with('parties', $parties);
    }

    public function other()
    {
        // 從 Model 拿資料
        $parties = Party::standpoint('其他')->get();
        // 把資料送給 view
        return view('parties.index')->with('parties', $parties);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $request->validate([
            'tname' => 'required|string',
            'chairman' => 'required|string',
            'secretary' => 'required|string',
            'standpoint' => 'required|string',
            'link' => 'required|string'
        ], [
            "tname.required" => "政黨名稱 為必填",
           // "tname.min" => "政黨名稱 至少需2個字元",
            "chairman.required" => "黨主席 為必填",
           // "chairman.min" => "黨主席 至少需2個字元",
            "secretary.required" => "秘書長 為必填",
           // "secretary.min" => "秘書長 至少需2個字元",
            "standpoint.required" => "政治立場 為必填",
           // "standpoint.min" => "政治立場 至少需2個字元",
            "link.required" => "官方網站 為必填",
        ]);


        $tname = $request->input('tname');
        $chairman = $request->input('chairman');
        $secretary = $request->input('secretary');
        $standpoint = $request->input('standpoint');
        $link = $request->input('link');
        
        Party::create([
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
        $party = Party::findOrFail($id);
        $titles = $party->titles;
        return view('parties.show',['party'=>$party,'titles'=>$titles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        parent::edit($id);
        
        $party = Party::findOrFail($id);
        return view('parties.edit', ['party'=>$party]);
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
        $request->validate([
            'tname' => 'required|string',
            'chairman' => 'required|string',
            'secretary' => 'required|string',
            'standpoint' => 'required|string',
            'link' => 'required|string'
        ], [
            "tname.required" => "政黨名稱 為必填",
           // "tname.min" => "政黨名稱 至少需2個字元",
            "chairman.required" => "黨主席 為必填",
           // "chairman.min" => "黨主席 至少需2個字元",
            "secretary.required" => "秘書長 為必填",
           // "secretary.min" => "秘書長 至少需2個字元",
            "standpoint.required" => "政治立場 為必填",
           // "standpoint.min" => "政治立場 至少需2個字元",
            "link.required" => "官方網站 為必填",
        ]);



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
        //
        $party = Party::findOrFail($id);
        $party->delete();
        return redirect('parties');
    }
}
