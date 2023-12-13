@extends('app')

@section('title', '編輯特定議員')

@section('taiwan_theme', '編輯中的議員')

@section('taiwan_title')
    {!! Form::model($title, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\TitleController@update', $title->id]]) !!}
    @include('titles.form', ['submitButtonText'=>"更新議員資料"])
    {!! Form::close() !!}
@endsection