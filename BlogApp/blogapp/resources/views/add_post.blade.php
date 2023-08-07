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

        <link href="/css/add_post.css" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="antialiased">
        <div>
            <nav>
                <h2><a href="/">Blogs</a></h2>
                <ul>
                    <li><a href="/category">Add Category</a></li>
                    <li><a href="#">Add Post</a></li>
                </ul>
            </nav>
            <br><br><br>
            <div class="form">
                <form action="/add-post" method="POST">
                    <div>
                        @csrf
                        <label  class="form-label">Categories</label>
                        <select name="categories" >
                            @foreach($category as $cat)
                            <option value="{{$cat->category_name}}">{{$cat->category_name}}</option>
                            @endforeach
                        </select>
                          <br><br>
                    <div class="mb-4">
                        <label for="post-title" class="form-label">Post Title</label>
                        <input type="text" required class="form-control" id="post-title" name="post_title">
                    </div>
                    <div class="mb-3">
                        <label for="post-content" class="form-label">Content</label>
                        <input type="text" class="form-control" id="post-content"required name="post_content">
                    </div>
                    <div class="mb-3">
                        <label for="post-content" class="form-label">Publication Date</label>
                        <input type="date" class="form-control" id="post-content" required name="post_publication_date">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Add Post</button>
                    
                </form>
            </div>
        </div>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
