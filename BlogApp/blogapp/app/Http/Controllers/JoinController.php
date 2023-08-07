<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
class JoinController extends Controller
{
    

    public function displayPost(Request $request){
     
        #fetch filtered post 

    if(request("categories")!="") {
        $category= Category::find(request("categories"));
        $posts = Post::where('category_name', $category->category_name)->get();
        Session::flash('filtered', 'Filtered');
        return view('welcome', ["posts"=> $posts]);
}
        #fetch all posts
        
        else{
           
            $posts=Post::all();
            $category=Category::all();
            return view('welcome', ["posts"=> $posts , "category"=> $category]);
        }
    }
}
