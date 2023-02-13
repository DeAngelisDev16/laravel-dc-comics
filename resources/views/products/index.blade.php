<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-dc-comics</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <header class="bg-dark">
        <h1 class="text-warning text-center p-4">Laravel-dc-comics</h1>
    </header>

    <div class="container py-5">
        <div class="row gy-5">
            @foreach ($products as $product)
            <div class="col-3">
                <div class="card p-3">
                    <img class="img-fluid" src="{{$product->image}}" alt="">
                    <h2>{{$product->title}}</h2>
                    <pre>{{$product->price}}</pre>
                    <pre>{{$product->series}}</pre>
                    <pre>{{$product->type}}</pre>


                    <p>{{$product->description}}</p>


                    
                </div>
            </div>
                
            @endforeach
        </div>
    </div>

    <footer class="bg-dark">
        <h1 class="text-warning text-center p-4">Laravel-dc-comics</h1>
    </footer>
    
</body>
</html>