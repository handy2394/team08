@extends('app')

@section('title', '建立政黨表單')

@section('taiwan_theme', '建立政黨的表單')

@section('taiwan_title')
    @include('message.list')
    {!! Form::open(['url' => 'parties/store']) !!}
    @include('parties.form', ['submitButtonText'=>'新增球隊資料'])
    {!! Form::close() !!}
@endsection