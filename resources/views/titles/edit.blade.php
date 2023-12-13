@extends('app')

@section('title', '編輯民意代表')

@section('taiwan_theme', '編輯中的民意代表')

@section('taiwan_titles')
{!! Form::model($title, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\TitlesController@update', $title->id]]) !!}
    @include('titles.form', ['submitButtonText'=>"更新民意代表資料"])
    {!! Form::close() !!}
@endsection