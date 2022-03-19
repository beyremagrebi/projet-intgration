<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b8e9726f83.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    

</head>
<body>
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
    <h1 class="title">Post </h1>
    <div class="container p-4 mb-4">
    
        <div class="head">
        <a href="{{route('show')}}" class="btn btn-primary mr-4 m-1"><i class="fas fa-home"></i></a>
            <small class="form-text ml-1">&nbspWe'll send At {{$affiche->date}}</small>
        </div>
        <div class="head">
        <h3>Post #000{{$affiche->id}}</h3><span class="badge badge-primary ml-3">Adminstration
        </span>
        </div>
        <div class="">
            <div class="head titlex mt-3 mb-1">
                <h4>Title:  {{$affiche->title}}</h4><span class="ml-2 badge-info badge"></span>
            </div>
                <div class="mb-5 alert alert-info">
                    {{$affiche->description}}
            </div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete this post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sur you want to delete this post ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a class="btn btn-danger" href="{{route('delete',$affiche->id)}}">Delete post</a>
        </div>
      </div>
    </div>
  </div>
  
            <div class="text-end">
                <a href="{{route('edit',$affiche->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>

                <button  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash-alt"></i></button>
   
            </div>

        </div>
        </div>
</body>
</html>