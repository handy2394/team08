@extends('app')

@section('title', '建立政黨表單')

@section('taiwan_theme', '建立政黨表單')

@section('Titles')
    @include('message.list')
    {!! Form::open(['url' => 'titles/store']) !!}
    @include('titles.form', ['submitButtonText'=>'新增政黨資料'])
    {!! Form::close() !!}
@endsection
