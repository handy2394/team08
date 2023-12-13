@extends('app')

@section('title', '列出所有議員')

@section('Ttitles')

編號：{{ $title->id }}<br/>
姓名：{{ $title->name }}<br/>
性別：{{ $title->gender }}<br/>
屆：{{ $title->session }}<br/>
民意代表：{{ $title->title }}<br/>
縣市：{{ $title->city }}<br/>
生日：{{ $title->birthday }}<br/>
選區：{{ $title->area }}<br/>
電話：{{ $title->cellphone }}<br/>
通訊處：{{ $title->address }}<br/>
個人網站：{{ $title->website }}<br/>
黨派：{{ $title->tid }}<br/>

@endsection 