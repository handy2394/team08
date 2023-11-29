<html>
<head>
    <title>民意代表名單</title>
</head>


<body>
<h1>列出所有民意代表</h1>

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
    @for($i=0;$i<count($titles);$i++)
        <tr>
            <td>{{$titles[$i]['id'] }} </td>
            <td>{{$titles[$i]['name'] }} </td>
            <td>{{$titles[$i]['gender'] }}</td>
            <td>{{$titles[$i]['session'] }}</td>
            <td>{{$titles[$i]['title'] }}</td>
            <td>{{$titles[$i]['city'] }}</td>
            <td>{{$titles[$i]['birthday'] }}</td>
            <td>{{$titles[$i]['area'] }}</td>
            <td>{{$titles[$i]['cellphone'] }}</td>
            <td>{{$titles[$i]['address'] }}</td>
            <td>{{$titles[$i]['website'] }}</td>
            <td>{{$titles[$i]['tid'] }}</td>
            <td><a href="{{ route('titles.show',['id'=>$titles[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('titles.edit',['id'=>$titles[$i]['id']]) }}">修改</a></td>
            <td>刪除</td>
        </tr>
    @endfor
<table>


</body>
</html>


