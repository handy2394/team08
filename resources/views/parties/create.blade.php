@extends('app')

@section('title', '建立名義代表表單')

@section('nba_theme', '建立名義代表表單')

@section('nba_contents')
    {!! Form::open(['url' => 'parties/store']) !!}
    @include('parties.form', ['submitButtonText'=>"新增名義代表資料"])
    {!! Form::close() !!}
@endsection
