@extends('app')

@section('title', '編輯特定政黨')

@section('politics_theme', '編輯中的政黨')

@section('politics_contents')
    {!! Form::model($party, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\PartiesController@update', $party->id]]) !!}
    @include('parties.form', ['submitButtonText'=>'更新政黨資料'])
    {!! Form::close() !!}
@endsection