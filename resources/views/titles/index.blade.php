<html>
<head>
    <title>列出所有議員</title>
</head>

<body>
<h1>列出所有議員</h1>
@for($i=0; $i<count($titles);$i++)
    {{$titles[$i]['name'] }} <br/>
    {{$titles[$i]['gender'] }} <br/>
    {{$titles[$i]['session'] }} <br/>
    {{$titles[$i]['title'] }} <br/>
    {{$titles[$i]['city'] }} <br/>
    {{$titles[$i]['birthday'] }} <br/>
    {{$titles[$i]['area'] }} <br/>
    {{$titles[$i]['cellphone'] }} <br/>
    {{$titles[$i]['address'] }} <br/>
    {{$titles[$i]['website'] }} <br/>
    {{$titles[$i]['tid'] }} <br/><br/>
@endfor    
</body>
</html>
