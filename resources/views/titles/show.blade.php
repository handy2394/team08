@extends('app')

@section('title','台灣政黨網站 - 政黨成員名單')

@section('taiwan_title')
<h1>政黨成員資料</h1>

成員編號: {{ $title->id }}<br/> 
姓名: {{ $title->name }}<br/>
性別: {{ $title->gender }}<br/>
屆: {{ $title->session }}<br/>
民意代表: {{ $title->title }}<br/>
縣市: {{ $title->city }}<br/>  
生日: {{ $title->birthday }}<br/> 
選區: {{ $title->area }}<br/>
電話: {{ $title->cellphone }}<br/>
通訊處: {{ $title->address }}<br/>
個人網案: {{ $title->website }}<br/>
黨派: {{ $title->party->tname }}<br/>  

@endsection