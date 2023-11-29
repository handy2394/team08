<html>
<head>
    <title>政黨名單</title>
</head>


<body>
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
    @for($i=0;$i<count($parties);$i++)
        <tr>
            <td>{{$parties[$i]['id'] }} </td>
            <td>{{$parties[$i]['tname'] }} </td>
            <td>{{$parties[$i]['chairman'] }}</td>
            <td>{{$parties[$i]['secretary'] }}</td>
            <td>{{$parties[$i]['standpoint'] }}</td>
            <td>{{$parties[$i]['link'] }}</td>
            <td><a href="{{ route('parties.show',['id'=>$parties[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('parties.edit',['id'=>$parties[$i]['id']]) }}">修改</a></td>
            <td>刪除</td>
        </tr>    
@endfor
</table>
</body>

</html>