@extends('app')

@section('title', '建立政黨表單')

@section('nba_theme', '建立政黨表單')

@section('nba_contents')
    {!! Form::open(['url' => 'titles/store']) !!}
    @include('titles.form', ['submitButtonText'=>'新增政黨資料'])
    {!! Form::close() !!}
@endsection
