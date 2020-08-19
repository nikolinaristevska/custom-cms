<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Product;
use App\Slider;
use App\User;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $users = User::all();
        $posts = Posts::all();
        $sliders = Slider::all();
        $product = Product::all();
        $data = ["users" => $users, "posts" => $posts, "sliders" => $sliders, "product" => $product];
        return view('frontend.homepage')->with($data);
    }

  /*  public function category($category_slug) {
        $category = Categories::where('slug', '=', $category_slug)->first();
        $data = ["category" => $category];
        return view('frontend.category')->with($data);

    }

    public function post ($category_slug, $post_slug) {
        $category = Categories::where('slug', '=', $category_slug)->first();
        $post = Posts::where('slug', '=', $post_slug)->first();
        $data = ["category" => $category, "post" => $post];
        return view('frontend.blog')->with($data);
    }*/

}
