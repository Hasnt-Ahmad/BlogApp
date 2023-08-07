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

        <link href="/css/add_category.css" rel="stylesheet">
        <link href="/css/edit_category.css" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="antialiased">
        <div>
            <nav>
                <h2>Blogs</h2>
                <ul>
                    <li><a href="/category">Category</a></li>
                    <li><a href="/post">Post</a></li>
                </ul>
            </nav>
            <br><br><br>
            <div class="form">
                <form action="/update-post/{{$posts->post_id}}" method="POST">
                    <div>
                        @csrf
                    <div class="mb-4">
                        <label for="cat" class="form-label">Post Title</label>
                        <input type="text" required class="form-control" id="cat" name="post_title" value="{{$posts->post_title}}">
                    </div>
                    <div class="mb-3">
                        <label for="cat-description" class="form-label">Post Content</label>
                        <input type="text" class="form-control" id="cat-description" name="post_content" value="{{$posts->post_content}}">
                    </div>

                    <div class="mb-3">
                        <label for="cat-description" class="form-label">Post Publiction Date</label>
                        <input type="date" class="form-control" id="cat-description" name="post_publication_date" value="{{$posts->post_publication_date}}">
                    </div>
                    
                    <button type="submit" class="btn btn-success">Update</button>
                    
                </form>
            </div>
        </div>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
