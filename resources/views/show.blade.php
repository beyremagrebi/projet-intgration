<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/b8e9726f83.js" crossorigin="anonymous"></script>
    <title>Show</title>
    <style>
        .title{
             margin:10px;
           margin-left:8%;
        }
        .container{
            box-shadow:0 4px 16px rgba(0,0,0,.25);
        }
        .head{
        display:flex;
        align-items:center;
    }
    span{
        border-radius:5px;
    }
</style>    
</head>
<body>
    <h1 class="title">Posts</h1>
    @foreach ($affiches as $affiche)
<div class="container p-4 mb-3">
    <div class="head">
    <h3>Post #000{{$affiche->id}}</h3>
    <span class="badge btn-success p-1 m-2">Adminstration</span>
</div>
<small class="form-text ml-1">&nbspWe'll send At {{$affiche->date}}</small>

        <div class="text-end"><a href="{{route('details',$affiche->id)}}" class="btn btn-primary"><i class="fas fa-info-circle"></i></a></div>

        </div>
        @endforeach
</body>
</html>