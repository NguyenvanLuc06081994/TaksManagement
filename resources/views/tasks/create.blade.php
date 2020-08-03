<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('tasks.index')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Task Name">
    <input type="text" name="contents" placeholder="Task Content">
    <input type="text" name="category" placeholder="Task Category">
    <input type="submit" value="ADD">
</form>
</body>
</html>
