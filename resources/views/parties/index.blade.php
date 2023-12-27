@extends('app')

@section('title','台灣政黨網站 - 政黨成員名單')

@section('taiwan_title')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    <a href="{{ route('parties.create') }} ">新增政黨</a>
    <a href="{{ route('parties.index') }} ">所有政黨</a>
    <a href="{{ route('parties.green') }} ">泛綠政黨</a>
    <a href="{{ route('parties.blue') }} ">泛藍政黨</a>
    <a href="{{ route('parties.no') }} ">無傾向</a>
    <a href="{{ route('parties.other') }} ">其他</a>
</div>


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
    <tr>     
    @foreach($parties as $party)
        <tr>
            <td>{{ $party->id }} </td>
            <td>{{ $party->tname }} </td>
            <td>{{ $party->chairman }} </td>
            <td>{{ $party->secretary }} </td>
            <td>{{ $party->standpoint }} </td>
            <td>{{ $party->link }} </td>
            <td><a href="{{ route('parties.show',['id'=>$party->id]) }}">顯示</a></td>
            <td><a href="{{ route('parties.edit',['id'=>$party->id]) }}">修改</a></td>
    
            <td>
                <form action="{{ url('/parties/delete',['id'=>$party->id]) }}" method='post'>
                    <input class='btn btn-default' type='submit' value='刪除' />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>    
@endforeach
<table>

@endsection