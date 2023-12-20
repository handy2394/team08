@extends('app')

@section('title', '編輯政黨')

@section('taiwan_theme', '編輯中的政黨')

@section('taiwan_titles')
    @include('message.list')
    {!! Form::model($party, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\PartiesController@update', $party->id]]) !!}
    @include('parties.form', ['submitButtonText'=>"更新黨派資料"])
    {!! Form::close() !!}
@endsection