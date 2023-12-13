@extends('app')

@section('title', '建立民意代表表單')

@section('taiwan_theme', '建立民意代表表單')

@section('taiwan_titles')
    {!! Form::open(['url' => 'titles/store']) !!}
    @include('parties.form', ['submitButtonText'=>"新增民意代表資料"])
    {!! Form::close() !!}
@endsection