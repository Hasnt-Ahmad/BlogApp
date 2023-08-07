<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="/css/welcome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="/css/category_page.css" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="antialiased">
        <div>
            <nav>
                <h2><a href="/">Blogs</a></h2>
                <ul>
                    <li><a href="/addcategory">Add Category</a></li>
                    <li><a href="/post">Post</a></li>
                </ul>
            </nav>
        </div>

        <br><br><br>
        <table class="table table-striped">
            <tr>
                <th>
                    Category Name
                </th>
                <th>
                    Category Description
                </th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->category_name}}</td>
                <td>{{$category->category_description}}</td>
                <td><a href="/edit-category/{{$category->category_name}}"><i class="bi bi-pencil-square"></i></i></a></td>
                <td><a href="/delete-category/{{$category->category_name}}"><i class="bi bi-trash3-fill"></i></a></a></td>
            </tr>
            @endforeach
          </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>
