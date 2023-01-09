<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Articles</title>
    </head>
    <body class="antialiased">
        this is list
        @foreach($categories as $category)
        <div>{{$category->name}}</div>
        @endforeach  
    </body>
</html>
