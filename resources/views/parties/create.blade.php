@extends('app')

@section('title', '建立政黨表單')

@section('header', '建立政黨表單')

@section('Titles')
    @include('message.list')
    {!! Form::open(['url' => 'parties/store']) !!}
    @include('parties.form', ['submitButtonText'=>"新增政黨資料"])
    {!! Form::close() !!}
@endsection
