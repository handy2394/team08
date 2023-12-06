@extends('app')

@section('title', '列出所有議員')

@section('Ttitles')

編號：{{ $player->id }}<br/>
姓名：{{ $player->name }}<br/>
性別：{{ $player->gender }}<br/>
屆：{{ $player->session }}<br/>
民意代表：{{ $player->title }}<br/>
縣市：{{ $player->city }}<br/>
生日：{{ $player->birthday }}<br/>
選區：{{ $player->area }}<br/>
電話：{{ $player->cellphone }}<br/>
通訊處：{{ $player->address }}<br/>
個人網站：{{ $player->website }}<br/>
黨派：{{ $player->tid }}<br/>

@endsection 