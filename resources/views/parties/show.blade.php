@extends('app')

@section('title','台灣政黨網站 - 政黨成員名單')

@section('taiwan_title')
<h1>台灣政黨成員</h1>


政黨編號: {{$party->id }}<br/> 
黨名: {{$party->tname }}<br/>
黨主席: {{$party->chairman }}<br/>
秘書長: {{$party->secretary }}<br/>
政治立場: {{$party->standpoint }}<br/>
官方網站: {{$party->link }}<br/>  


<h1>列出{{$party->tname}}的所有球員</h1>

<table>
    <tr>
        <th>編號</th>
        <th>姓名</th>
        <th>性別</th>
        <th>屆</th>
        <th>民意代表</th>
        <th>縣市</th>
        <th>生日</th>
        <th>選區</th>
        <th>電話</th>
        <th>通訊處</th>
        <th>個人網站</th>
        <th>黨派</th>
     </tr>    
    @foreach($titles as $title)
        <tr>
            <td>{{$title->id }} </td>
            <td>{{$title->name }} </td>
            <td>{{$title->gender }}</td>
            <td>{{$title->session }}</td>
            <td>{{$title->title }}</td>
            <td>{{$title->city }}</td>
            <td>{{$title->birthday }}</td>
            <td>{{$title->area }}</td>
            <td>{{$title->cellphone }}</td>
            <td>{{$title->address }}</td>
            <td>{{$title->website }}</td>
            <td>{{$title->party->tname }}</td>
        </tr>
    @endforeach
<table>

@endsection