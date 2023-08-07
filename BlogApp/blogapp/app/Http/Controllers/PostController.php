<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function addPost(Request $request){

        #insert post
        $post=new Post();
        $post->category_name=request("categories");
        $post->post_title=request("post_title");
        $post->post_content=request("post_content");
        $post->post_publication_date=request("post_publication_date");
        $post->save();
        return redirect("/post");
        
    }
    public function showCategory(Request $request){
        #ftech category data
        $category=Category::all();
        return view('add_post', ["category"=> $category]);
        
    }
    public function displayPost(){

        
        $posts=Post::all();
        return view('post_page', ["posts"=> $posts]);
    }
    public function editPost($id){
        $posts=Post::find($id);
        return view("edit_post",['posts'=> $posts]);
    }


    public function updatePost($id){

        #delete post data
        $posts=Post::find($id);
        $posts->post_title=request("post_title");
        $posts->post_content=request("post_content");
        $posts->post_publication_date=request("post_publication_date");
        $posts->save();
        return redirect("/post",);
    }
    public function deletePost($id){

        #delete post data
        $posts=Post::find($id);
        $posts->delete();
        return redirect("/post",);
    }
}

