@extends('app')

@section('title', '編輯名義政黨')

@section('taiwan_theme', '編輯名義政黨')

@section('Titles')
    @include('message.list')
    {!! Form::model($party, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\PartiesController@update', $party->id]]) !!}
    @include('parties.form', ['submitButtonText'=>"更新政黨資料"])
    {!! Form::close() !!}
@endsection
