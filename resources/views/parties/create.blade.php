@extends('app')

@section('title', '建立政黨表單')

@section('politics_theme', '建立政黨的表單')

@section('politics_contents')
    {!! Form::open(['url' => 'parties/store']) !!}
    @include('parties.form', ['submitButtonText'=>'新增政黨資料'])
    {!! Form::close() !!}
@endsection
