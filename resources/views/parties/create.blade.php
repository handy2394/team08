@extends('app')

@section('title', '建立政黨表單')

@section('taiwan_theme', '建立政黨的表單')

@section('taiwan_title')
    {!! Form::open(['url' => 'parties/store']) !!}
    @include('parties.form', ['submitButtonText'=>'新增政黨資料'])
    {!! Form::close() !!}
@endsection