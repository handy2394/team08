@extends('app')

@section('title', '編輯名義代表球員')

@section('nba_theme', '編輯名義代表球員')

@section('nba_contents')
    {!! Form::model($party, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\PartiesController@update', $party->id]]) !!}
    @include('parties.form', ['submitButtonText'=>"更新名義代表資料"])
    {!! Form::close() !!}
@endsection
