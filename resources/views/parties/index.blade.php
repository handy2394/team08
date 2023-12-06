
@extends('app')

@section('title', '列出所有議員')

@section('Ttitles')
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
    @foreach ($players as $player)
        <tr>
            <td>{{ $player->id }}</td>
            <td>{{ $player->name }}</td>
            <td>{{ $player->chairman }}</td>
            <td>{{ $player->secretary }}</td>
            <td>{{ $player->standpoint }}</td>
            <td>{{ $player->link }}</td>
            <td><a href="{{ route('parties.show', ['id'=>$party->id]) }}">顯示</a></td>
            <td><a href="{{ route('parties.edit', ['id'=>$party->id]) }}">修改</a></td>        
            <td>
                <form action="{{ url('/titles/delete', ['id' => $title->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td> 
        </tr>
    @endfor
<table>
@endsection 