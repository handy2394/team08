@extends('app')

@section('title', '建立球員表單')

@section('politics_theme', '建立球員的表單')

@section('politics_contents')
    {!! Form::open(['url' => 'titles/store']) !!}
    @include('titles.form', ['submitButtonText'=>"新增民意代表資料"])
    {!! Form::close() !!}
@endsection
