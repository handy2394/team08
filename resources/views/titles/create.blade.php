@extends('app')

@section('title', '建立民意代表表單')

@section('taiwan_theme', '建立民意代表表單')

@section('taiwan_titles')
    @include('message.list')
    {!! Form::open(['url' => 'titles/store']) !!}
    @include('titles.form', ['submitButtonText'=>"新增議員資料"])
    {!! Form::close() !!}
@endsection