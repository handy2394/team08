@extends('app')

@section('title', '建立議員表單')

@section('taiwan_theme', '建立議員的表單')

@section('taiwan_title')
    {!! Form::open(['url' => 'titles/store']) !!}
    @include('titles.form', ['submitButtonText'=>"新增議員資料"])
    {!! Form::close() !!}
@endsection