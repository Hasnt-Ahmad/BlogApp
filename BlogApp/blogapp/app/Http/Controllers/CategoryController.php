<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    

    public function addCategory(Request $request, ){
        
        #inset category data
        $category=new Category();
        $category->category_name=request("category");
        $category->category_description=request("category_description");
        $category->save();
        return redirect("/category");
    }
    public function displayCategory(Request $request, ){
        
       #fetch category data
        $categories=Category::all();
        return view("category_page",['categories'=> $categories]);
        
    }
    public function editCategory(Request $request,$categoryname ){
        
       
        $categories=Category::find($categoryname);
        return view("edit_category",['categories'=> $categories]);
        
    }
    public function updateCategory(Request $request,$id ){
        
        #update category data
        $category = Category::find($id);
        $posts = Post::where('category_name', $category->category_name)->get();
        if(count($posts) > 0) {
            foreach ($posts as $post) {
                $post->delete();
            }
        }
            #delete category
        $category->category_name=request("category");
        $category->category_description=request("category_description");
        $category->save();
        return redirect("/category");
    }
    public function deleteCategory(Request $request,$id ){

        # fetch category data
       
        $category = Category::find($id);

        #fetch post based on specific category
        $posts = Post::where('category_name', $category->category_name)->get();

        #delete every post related to specific category
    if(count($posts) > 0) {
        foreach ($posts as $post) {
            $post->delete();
        }
    }
        #delete category
        $category->delete();
        return redirect("/category");
    }
}
