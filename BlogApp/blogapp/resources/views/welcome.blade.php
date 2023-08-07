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

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="antialiased">
        <div>
            <nav>
                <h2><a href="/">Blogs</a></h2>
                <ul>
                    <li><a href="/category">Category</a></li>
                    <li><a href="/post">Post</a></li>
                </ul>
            </nav>
            <br><br><br>

            @if(!(@session("filtered")))
            <form action="/filter-post" method="POST">
                <div class="Filter-div">
                    @csrf
                    <label>Filter Post :</label>
                    <select name="categories">
                        
                            @foreach($category as $cat)
                                <option name="{{$cat->category_name}}">{{$cat->category_name}}</option>
                            @endforeach
                     
                    </select>
                    <button class="btn btn-secondary">Apply</button>
                </div>
            </form>
            @endif

            
            @if(count($posts) > 0)

            <div class="container">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-12">
                            <div class="content-div">
                                <h1 class="heading">{{$post->post_title}}</h1>
                                <p class="post-content">{{$post->post_content}}</p>
                                <br><br><br><br>
                                <p>Publication date : {{$post->post_publication_date}}</p>
                                <br><br><br>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        
        @else
        
            <div style="text-align: center">No post found</div>
        
        @endif
        
        </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
