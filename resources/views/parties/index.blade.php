<html>
<head>
    <title>列出所有政黨</title>
</head>

<body>
<h1>列出所有政黨</h1>
@for($i=0; $i<count($parties);$i++)
    {{$parties[$i]['tname'] }} <br/>
    {{$parties[$i]['chairman'] }} <br/>
    {{$parties[$i]['secretary'] }} <br/>
    {{$parties[$i]['standpoint'] }} <br/>
    {{$parties[$i]['link'] }} <br/><br/>
@endfor    
</body>
</html>