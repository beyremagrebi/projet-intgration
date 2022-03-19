<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

<h1 class="title">new Post <i class="fas fa-ticket-alt"></i></h1>
<div class="container p-4">
    <h3>Choisir département</h3>
    <div>
        <label for="monselect">Enseignat</label>
    <select id="monselect">
        <option value="0">ahmend ben ahmed</option>
        <option value="1" selected>Beyrem Agrebi
        <option value="2">ali ben salem</option>
        <option value="3">saif werghi</option>
      </select>
    </div>
    <div class="text-end">
        <button type="submit" class="btn btn-primary">valider</button>

    </div>
</div>