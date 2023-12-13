@extends('app')

@section('title', '編輯特定民意代表')

@section('politics_name', '編輯中的民意代表')

@section('politics_contents')
    {!! Form::model($title, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\TitlesController@update', $title->id]]) !!}
    @include('titles.form', ['submitButtonText'=>"更新民意代表資料"])
    {!! Form::close() !!}
@endsection