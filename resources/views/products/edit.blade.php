<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <h1 class="text-center p-3">Edit your comic book here!</h1>
    <div class="container pt-3">
        <form method="POST" action="{{route('products.update', $product->id)}}">
            @csrf
            @method('PUT')

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                        
                    @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    
                    @endforeach
                    
                    
                </ul>
                
            </div>
            @endif
            <div class="mb-3">
                <input type="text" placeholder="Add a comic title" class="form-control" id="" name="title" value="{{$product->title}}">
            </div>

            <div class="mb-3">
                <input type="text" placeholder="Add a comic description" class="form-control" id="" name="description" value="{{$product->description}}">
            </div>

            <div class="mb-3">
                <input type="text" placeholder="copy a comic image (URL)" class="form-control" id="" name="image" value="{{$product->image}}">
            </div>

            <div class="mb-3">
                <input type="number" placeholder="Add a comic price" class="form-control" id="" name="price" value="{{$product->price}}">
            </div>

            <div class="mb-3">
                <input type="text" placeholder="Add a comic series" class="form-control" id="" name="series" value="{{$product->series}}" >
            </div>

            <div class="mb-3">
                <input type="text" placeholder="Add a release date (YY/MM/DD)" class="form-control" id=""  name="release_date" value="{{$product->release_date}}">
            </div>

            <div class="mb-3">
                <input type="type" placeholder="Add a comic type" class="form-control"  id="" name="type" value="{{$product->type}}">
            </div>
              
              
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
       
    
</body>
</html>