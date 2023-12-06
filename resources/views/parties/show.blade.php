@extends('app')

@section('title','民意代表網站-列出所有政黨')

@section('politics_contents')
政黨編號:{{ $party->id }}<br/>
黨名:{{ $party->tname }}<br/>
黨主席:{{ $party->chairman }}<br/>
秘書長:{{ $party->secretary }}<br/>
政治立場:{{ $party->standpoint }}<br/>
官方網站:{{ $party->link }}<br/>
@endsection