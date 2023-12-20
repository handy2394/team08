@extends('app')

@section('title', '建立政黨表單')

@section('taiwan_theme', '建立政黨表單')

@section('taiwan_titles')
@include('message.list')
    {!! Form::open(['url' => 'parties/store']) !!}
    @include('parties.form', ['submitButtonText'=>"新增議員資料"])
    {!! Form::close() !!}
@endsection