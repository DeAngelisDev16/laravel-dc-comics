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
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="card text-center">
                    <img src="{{$product->image}}" alt="" class="img-fluid">
                    <a href="{{route('products.edit', $product->id)}}" class="p-3">Edit comic book</a>
                    <form action="{{route('products.destroy', $product->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                    <a href="{{route('products.index')}}">Go to comics cards</a>
                    

                    <h1>{{$product->title}}</h1>
                    <p>{{$product->description}}</p>
                    
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>