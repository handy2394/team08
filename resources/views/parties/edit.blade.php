@extends('app')

@section('title', '編輯政黨')

@section('taiwan_theme', '編輯中的政黨')

@section('taiwan_titles')
{!! Form::model($party, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\TitlesController@update', $party->id]]) !!}
    @include('parties.form', ['submitButtonText'=>"更新政黨資料"])
    {!! Form::close() !!}
@endsection