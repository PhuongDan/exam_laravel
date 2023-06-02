<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Students</title>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">age</th>
        <th scope="col">address</th>
        <th scope="col">telephone</th>
    </tr>
    </thead>
    <tbody>
    @foreach($students as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->telephone}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

<a href="/add"><button type="button" class="btn btn-primary">Add new a student</button></a>
</body>
</html>
