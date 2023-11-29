<html>
<head>
    <title>政黨名單</title>
</head>


<body>
@for($i=0;$i<count($parties);$i++)
{{$parties[$i]['id'] }} <br/>
{{$parties[$i]['tname'] }} <br/>
{{$parties[$i]['chairman'] }}<br/>
{{$parties[$i]['secretary'] }}<br/>
{{$parties[$i]['standpoint'] }}<br/>
{{$parties[$i]['link'] }}<br/><br/>
@endfor
</body>

</html>