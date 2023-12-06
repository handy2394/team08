@extends('app')

@section('title', '列出所有議員')

@section('Ttitles')

編號：{{ $player->id }}<br/>
黨主席：{{ $player->tname }}<br/>
秘書長：{{ $player->chairman }}<br/>
政治立場：{{ $player->secretary }}<br/>
官方網站：{{ $player->standpoint }}<br/>

@endsection 