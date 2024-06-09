<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Commerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
    <nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
       
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Products</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    @if($message = Session::get('success'))

    <div class="alert alert-success alert-block">
        <strong>{{$message}}</strong>
    </div>

    @endif

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-sm-7">
                <div class="card mt-3 p-3">
                    <h3 class="text-muted">Product Edit #{{$product->name}}</h3>
                    <form method="post" action="/products/{{$product->id}}/update" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-3">
                        <label>Name <span style="color: red;">&#42;</span></label>
                        <input type="text" name="name" class="form-control" value="{{old('name', $product->name)}}">
                        
                        @if($errors->has('name'))
                        <span class="text-danger"> {{$errors->first('name')}}</span>
                        @endif
                    </div>

                    <div class="form-group mt-3">
                        <label>Description <span style="color: red;">&#42;</span></label>
                        <textarea name="description" class="form-control" rows="4">{{old('description', $product->description)}}</textarea>
                        @if($errors->has('description'))
                        <span class="text-danger"> {{$errors->first('description')}}</span>
                        @endif
                    </div>

                    <div class="form-group mt-3">
                        <label>Image <span style="color: red;">&#42;</span></label>
                        <input type="file" name="image" class="form-control">
                        @if($errors->has('image'))
                        <span class="text-danger"> {{$errors->first('image')}}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-dark mt-3" >submit</button>
                </form>
                </div>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>