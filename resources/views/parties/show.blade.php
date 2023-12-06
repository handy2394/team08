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
          
@endsection