@extends('app')

@section('title', '台灣民意代表 - 列出所有民意代表')

@section('taiwan_titles')
<h1>你所選取的民意代表資料</h1>
<table>
    <tr>
        <td>編號: {{$title->id }}</td>
    <tr>  
    <tr>
        <td>姓名:{{$title->name }}</td>
    <tr>
    <tr>
        <td>性別:{{$title->gender }}</td>
    <tr>
    <tr>
        <td>屆:{{$title->session }}</td>
    <tr>
    <tr>
        <td>民意代表:{{$title->title }}</td>
    <tr>
    <tr>
        <td>縣市:{{$title->city }}</td>
    <tr>
    <tr>
        <td>生日:{{$title->birthday }}</td>
    <tr>
    <tr>
        <td>選區:{{$title->name }}</td>
    <tr>
    <tr>
        <td>電話:{{$title->cellphone }}</td>
    <tr>
    <tr>
        <td>通訊處:{{$title->address }}</td>
    <tr>
    <tr>
        <td>個人網站:{{$title->website }}</td>
    <tr>
    <tr>
        <td>黨派:{{$title->tid }}</td>
    <tr>
<table>
@endsection