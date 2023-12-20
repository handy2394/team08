@extends('app')

@section('title', '建立民意代表表單')

@section('politics_theme', '建立民意代表的表單')

@section('politics_contents')
    @include('message.list')
    {!! Form::open(['url' => 'titles/store']) !!}
    @include('titles.form', ['submitButtonText'=>"新增民意代表資料"])
    {!! Form::close() !!}
@endsection
