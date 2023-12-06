@extends('app')

@section('title', '列出所有議員')

@section('Ttitles')



<h1>議員名單</h1>

<table>
    <tr>
        <th>編號</th>
        <th>姓名</th>
        <th>性別</th>
        <th>屆</th>
        <th>民意代表</th>
        <th>縣市</th>
        <th>生日</th>
        <th>選區</th>
        <th>電話</th>
        <th>通訊處</th>
        <th>個人網站</th>
        <th>黨派</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @for($i=0;$i<count($parties);$i++)
    <tr>
        <td>{{ $player->id }}</td>
        <td>{{ $player->name }}</td>
        <td>{{ $player->gender }}</td>
        <td>{{ $player->session }}</td>
        <td>{{ $player->title }}</td>
        <td>{{ $player->city }}</td>
        <td>{{ $player->birthday }}</td>
        <td>{{ $player->area }}</td>
        <td>{{ $player->cellphone }}</td>
        <td>{{ $player->address }}</td>
        <td>{{ $player->website }}</td>
        <td>{{ $player->tid }}</td>
        <td><a href="{{ route('titles.show', ['id'=>$titles[$i]['id']]) }}">顯示</a></td>
        <td><a href="{{ route('titles.edit', ['id'=>$titles[$i]['id']]) }}">修改</a></td>    
        <td>刪除</td> 
    </tr>
    @endfor
</table>
@endsection












