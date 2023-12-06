@extends('app')

@section('title', '台灣政黨 - 列出所有政黨')

@section('taiwan_titles')
<h1>你所選取的政黨資料</h1>
<table>
    <tr>
        <td>編號: {{$party->id }}</td>
    <tr>  
    <tr>
        <td>黨名:{{$party->tname }}</td>
    <tr>
    <tr>
        <td>黨主席:{{$party->chairman }}</td>
    <tr>
    <tr>
        <td>秘書長:{{$party->secretary }}</td>
    <tr>
    <tr>
        <td>政治立場:{{$party->standpoint }}</td>
    <tr>
    <tr>
        <td>官方網站:{{$party->link }}</td>
    <tr>

<table>

@endsection