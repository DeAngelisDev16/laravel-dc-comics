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
                    <h1>{{$product->title}}</h1>
                    <p>{{$product->description}}</p>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>