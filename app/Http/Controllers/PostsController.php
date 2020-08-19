<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Posts;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Posts::all();
        $data = ['posts' => $posts];
        return view('admin.posts.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $users = User::all();
        $categories = Categories::getTree();
        $data = ['users' => $users, 'categories' => $categories];
        return view('admin.posts.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
            'image' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/posts/create')
                ->withErrors($validator)
                ->withInput();
        }

        $description = $request->description;
        $image = $this->imageStore($request);

        $post = new Posts();
        $post->title = $request->title;
        $post->description = $description;
        $post->image = $image;
        $post->body = $request->body;
        $post->category_id = $request->category_id;
        $post->user_id = $request->user_id;
        $post->slug = Str::slug($request->get('title'), '_');

        //str_slug($request->get('name'));
        $post->save();

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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $post = Posts::FindOrFail($id);
        $data = ["post" => $post];

        return view('admin.posts.edit')->with($data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        $errors = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);

        if ($errors->fails()) {
            return redirect()->back()
                ->withErrors($errors)
                ->withInput();
        }


        $request['title'] = strip_tags($request['title']);

        $slug = DB::table('posts')->select('slug')->where('id', '=', $id)->get();

        $slugname = $slug[0]->slug;


        $input = $request->all();
        $posts = Posts::FindOrFail($id);

        $posts->fill($input)->save();

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $original = public_path() . '/assets/img/posts/originals/';;
            $thumbnail = public_path() . '/assets/img/posts/thumbnails/';
            $medium = public_path() . '/assets/img/posts/medium/';
            $path = public_path() . '/assets/img/posts';

            $pathThumb = public_path() . '/assets/img/posts/thumbnails/';
            $pathMedium = public_path() . '/assets/img/posts/medium/';
            $ext = $image->getClientOriginalExtension();

            $imageName = $slugname . '.' . $ext;


            $image->move($path, $imageName);

            $findimage = public_path() . '/assets/img/posts/' . $imageName;
            $thumbnail = \Intervention\Image\ImageManagerStatic::make($findimage)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $medium = Image::make($findimage)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });


            $thumbnail->save($thumbnail . $imageName);
            $medium->save($medium . $imageName);

            $image = $request->imagethumb = $imageName;
            $thumbnail = $request->image = $imageName;
            $medium = $request->image = $imageName;


            $input['image'] = $image;
            $input['medium'] = $medium;
            $input['thumbnail'] = $thumbnail;

        }


        $posts->fill($input)->save();



        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $post = Posts::FindOrFail($id);
        $post->delete();
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

        $original = public_path() . '/assets/img/posts/originals/';;
        $thumbnail = public_path() . '/assets/img/posts/thumbnails/';
        $medium = public_path() . '/assets/img/posts/medium/';
        $paths = (object)compact('original', 'thumbnail', 'medium');
        return $paths;
    }

}
