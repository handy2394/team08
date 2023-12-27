@extends('app')

@section('title', '台灣民意代表 - 列出所有民意代表')

@section('taiwan_titles')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    <a href="{{ route('titles.create') }} ">新增民意代表</a>
    <a href="{{ route('titles.index') }} ">所有民意代表</a>
    <form action="{{ url('titles/city') }}" method='GET'>
        {!! Form::label('pos', '選取地區城市：') !!}
        {!! Form::select('pos', $city, $citySelected, ['class' => 'form-control']) !!}
        <input class="btn btn-default" type="submit" value="查詢" />
        @csrf
    </form>    
</div>


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
    @foreach($titles as $title)
        <tr>
            <td>{{$title->id }} </td>
            <td>{{$title->name}} </td>
            <td>{{$title->gender}}</td>
            <td>{{$title->session}}</td>
            <td>{{$title->title}}</td>
            <td>{{$title->city}}</td>
            <td>{{$title->birthday}}</td>
            <td>{{$title->area}}</td>
            <td>{{$title->cellphone}}</td>
            <td>{{$title->address}}</td>
            <td>{{$title->website}}</td>
            <td>{{$title->party->tname}}</td>
            <td><a href="{{ route('titles.show',['id'=>$title->id]) }}">顯示</a></td>
            <td><a href="{{ route('titles.edit',['id'=>$title->id]) }}">修改</a></td>
            <td>
                <form action="{{ url('/titles/delete', ['id' => $title->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
    @endforeach
<table>
{{ $titles->withQueryString()->links() }}
@endsection


