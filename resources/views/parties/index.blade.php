
@extends('app')

@section('title','民意代表網站-列出所有政黨')

@section('politics_contents')
<h1>列出所有政黨</h1>

<table>
    <tr>
        <th>編號</th>
        <th>黨名</th>
        <th>黨主席</th>
        <th>秘書長</th>
        <th>政治立場</th>
        <th>官方網站</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($parties as $party)
        <tr>
            <td>{{ $party->id }}</td>
            <td>{{ $party->tname }}</td>
            <td>{{ $party->chairman }}</td>
            <td>{{ $party->secretary }}</td>
            <td>{{ $party->standpoint }}</td>
            <td>{{ $party->link }}</td>
            <td><a href="{{ route('parties.show', ['id'=>$party->id]) }}">顯示</a></td>
            <td><a href="{{ route('parties.edit', ['id'=>$party->id]) }}">修改</a></td>    
            <td>刪除</td>
        </tr>    
    @endforeach  
</table>

@endsection