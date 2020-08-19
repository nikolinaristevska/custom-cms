<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::all();
        $data = ['products' => $products];
        return view('admin.products.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $products = Product::all();
        $users = User::all();
        $categories = Categories::getTree();
        $data = ['products' => $products, 'users' => $users, 'categories' => $categories];
        return view('admin.products.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('admin/products/create')
                ->withErrors($validator)
                ->withInput();
        }
        $image = $this->imageStore($request);
        $product = new Product();
        $product->title = $request->title;
        $product->image = $image;
        $product->category_id = $request->category_id;
        $product->user_id = $request->user_id;
        $product->slug = Str::slug($request->get('title'), '_');
        $product->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $product = Product::FindOrFail($id);
        $users = User::all();
        $categories = Categories::getTree();
        $data = ['product' => $product, 'users' => $users, 'categories' => $categories];
        return view('admin.products.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::FindOrFail($id);

        $product->fill($request->all())->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::FindOrFail($id);
        $product->delete();
        return redirect()->back();
    }

    public function imageStore(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
            $paths = $this->makePaths();
            File::makeDirectory($paths->original, $mode = 0755, true, true);
            File::makeDirectory($paths->thumbnail, $mode = 0755, true, true);
            File::makeDirectory($paths->medium, $mode = 0755, true, true);
            $image->move($paths->original, $imageName);
            $findimage = $paths->original . $imageName;
            $imagethumb = Image::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $imagemedium = Image::make($findimage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $imagethumb->save($paths->thumbnail . $imageName);
            $imagemedium->save($paths->medium . $imageName);

            return $imageName;
        }

    }

    public function makePaths()
    {

        $original = public_path() . '/assets/img/products/originals/';;
        $thumbnail = public_path() . '/assets/img/products/thumbnails/';
        $medium = public_path() . '/assets/img/products/medium/';
        $paths = (object)compact('original', 'thumbnail', 'medium');
        return $paths;
    }

}
