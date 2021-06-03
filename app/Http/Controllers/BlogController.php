<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Category;
use App\Models\Tags;
class BlogController extends Controller
{
    public function index(Posts $posts){
        $category_widget = Category::All();
        $tag_widget = Tags::all();
        $data = $posts->latest()->take(8)->get();
        $dataRandom  = $posts->inRandomOrder()->get();
        return view('blog',compact('data','category_widget','tag_widget','dataRandom'));
    }
    public function isi_blog($slug){
        $category_widget = Category::All();
        $tag_widget = Tags::all();
        $data = Posts::where('slug',$slug)->get();
        return view('blog.isipost', compact('data','category_widget','tag_widget'));
    }
    public function list_blog(){
        $category_widget = Category::All();
        $tag_widget = Tags::all();
        $data =Posts::latest()->paginate(5);
        return view('blog.listpost', compact ('data','category_widget','tag_widget'));
    }

    public function list_category(Category $category){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $data = $category->posts()->paginate(5);
        return view('blog.listpost', compact ('data','category_widget','tag_widget'));
    }

    public function search(request $request){
        $category_widget = category::all();
        $tag_widget = Tags::all();
        $data = Posts::where('judul',$request->search)->orWhere('judul','ilike','%'.$request->search.'%')->paginate(6);
        return view('blog.listpost', compact ('data','category_widget','tag_widget'));
    }

    public function list_tag(Tags $tags){
        $category_widget = Category::all();
        $tag_widget = Tags::all();
        $data = $tags->posts()->paginate(5);
        return view('blog.listpost', compact ('data','category_widget','tag_widget'));
    }
    }

