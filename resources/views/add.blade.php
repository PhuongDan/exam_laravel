<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Add</title>
</head>
<body>
<form action="{{url("/add")}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input name="name" type="text"  class="form-control" placeholder="">
        @error("name")
        <p class="text-danger"><i>{{$message}}</i></p>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Age</label>
        <input name="age" type="number"  class="form-control" placeholder="">
        @error("age")
        <p class="text-danger"><i>{{$message}}</i></p>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Address</label>
        <input name="address" type="text"  class="form-control" placeholder="">
        @error("address")
        <p class="text-danger"><i>{{$message}}</i></p>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Telephone</label>
        <input name="telephone" type="number"  class="form-control" placeholder="">
        @error("telephone")
        <p class="text-danger"><i>{{$message}}</i></p>
        @enderror
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</body>
</html>
