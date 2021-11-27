<!DOCTYPE html>
<html>
<head>
    <title>Laravel test page</title>
</head>
<body>

<h1>laravel test </h1>

Id no:{{$id}}<br>
Name:{{$name}}
<br>
<?php
echo "İd number:",$id;
echo "<br>Name:",$name;

for($i=1;$i<=$id;$i++){

    echo"<br>$i-$name";

        }


?>
<br>
<a href="{{route('home')}}">Ana sayfa</a>

</body>
</html>
