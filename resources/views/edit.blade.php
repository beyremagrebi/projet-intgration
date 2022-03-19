<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

    <title>Document</title>


<style>
    .title{
         margin:10px;
       margin-left:8%;
    }
    .container{
        box-shadow:0 4px 16px rgba(0,0,0,.25);
    }

</style>
</head>
<body>
<h1 class="title">Edit Post <i class="fas fa-ticket-alt"></i></h1>
<div class="container p-4">

<form action="" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="exampleInput" placeholder="Enter title" value="{{$affiche->title}}">
      </div>
  <div class="mb-3">
    <label for="exampleInputDesc" class="form-label">Description</label>
      
        <textarea name="description" class="form-control" id="editor" placeholder="new post..">
            <div id="editor">{{$affiche->description}}</div>
        </textarea>
     
   

  </div>

  <button type="submit" class="btn btn-primary">Edit</button>
</form>

</div>

  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

</body>
</html>