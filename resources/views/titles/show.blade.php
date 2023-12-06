
@extends('app')

@section('title','民意代表網站-列出所有民意代表')

@section('politics_contents')
議員編號:{{ $title->id }}<br/>
議員姓名:{{ $title->name }}<br/>
議員性別:{{ $title->gender }}<br/>
屆次:{{ $title->session }}<br/>
民意代表:{{ $title->title }}<br/>
所屬縣市:{{ $title->city }}<br/>
議員生日:{{ $title->birthday }}<br/>
議員選區:{{ $title->area }}<br/>
議員電話:{{ $title->cellphone }}<br/>
議員通訊處:{{ $title->address }}<br/>
議員個人網站:{{ $title->website }}<br/>
議員黨派:{{ $title->tid }}<br/>
@endsection
