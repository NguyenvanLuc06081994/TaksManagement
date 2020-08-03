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
<a href="{{route('tasks.showCreate')}}">ADD NEW TASK</a>
<table>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Content</th>
        <th>Category</th>
        <th colspan="3">Action</th>
    </tr>
    <tr>
        <td>1</td>
        <td>CaseStudy</td>
        <td>CRUD</td>
        <td>Study</td>
        <td><a href="{{route('tasks.detail',['id'=>1])}}">Detail</a></td>
        <td><a href="">Edit</a></td>
        <td><a href="">Delete</a></td>
    </tr>

    <?php if (isset($task)):?>
    <tr>
        <td>2</td>
        <td>{{$task['name']}}</td>
        <td>{{$task['content']}}</td>
        <td>{{$task['category']}}</td>
        <td><a href="{{route('tasks.detail',['id'=>2])}}">Detail</a></td>
        <td><a href="">Edit</a></td>
        <td><a href="">Delete</a></td>
    </tr>
    <?php endif; ?>
</table>
</body>
</html>
