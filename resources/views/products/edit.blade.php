<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container pt-3">
        <form method="POST" action="">
            @csrf
            <div class="mb-3">
                <input type="text" placeholder="Add a comic title" class="form-control" id="" name="title">
            </div>

            <div class="mb-3">
                <input type="text" placeholder="Add a comic description" class="form-control" id="" name="description">
            </div>

            <div class="mb-3">
                <input type="text" placeholder="copy a comic image (URL)" class="form-control" id="" name="image">
            </div>

            <div class="mb-3">
                <input type="number" placeholder="Add a comic price" class="form-control" id="" name="price">
            </div>

            <div class="mb-3">
                <input type="text" placeholder="Add a comic series" class="form-control" id="" name="series" >
            </div>

            <div class="mb-3">
                <input type="text" placeholder="Add a release date (YY/MM/DD)" class="form-control" id=""  name="release_date">
            </div>

            <div class="mb-3">
                <input type="type" placeholder="Add a comic type" class="form-control"  id="" name="type">
            </div>
              
              
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
       
    
</body>
</html>