<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Commerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    #navbtn{
        text-align: right;
    }
</style>

<body>
    
    <nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
       
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Products</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <br>

    <div class="container">
        <div id="navbtn">
        <h1 style="text-align: left;">Product's</h1>
            <a href="products/create" class="btn btn-dark mt-2">New Product</a>
        </div>
        
    </div>

    <!-- table -->

    <table class="table table-hover mt-3">
    <thead>
      <tr>
      <th>S.no</th>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td><a href="products/{{$product->id}}/show"> {{$product->name}} </a></td>
        <td>{{$product->description}}</td>
        <td>
          <img src="products/{{$product->image}}" class="rounded-circle" width="30px" height="30px">
        </td>
        <td>
          <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm">edit</a>
          <form method="POST" class="d-inline" action="/products/{{ $product->id }}/delete">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>