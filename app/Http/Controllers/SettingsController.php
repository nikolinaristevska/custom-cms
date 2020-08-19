<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $settings = Settings::all();
        $data = ["settings" => $settings];
        return view('admin.settings.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $settings = Settings::all();
        $data = ["settings" => $settings];
        return view('admin.settings.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'url' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required',
            'image' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('admin/settings/create')
                ->withErrors($validator)
                ->withInput();
        }
        $image = $this->imageStore($request);

        $setting = new Settings();
        $setting->title = $request->title;
        $setting->url = $request->url;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->phone = $request->phone;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->linkedin = $request->linkedin;
        $setting->instagram = $request->instagram;
        $setting->image = $request->image;
        $setting->save();
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
        $settings = Settings::FindOrFail($id);
        $data = ['settings' => $settings];
        return view('admin.settings.edit')->with($data);

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
        $setting = Settings::FindOrFail($id);
        $setting->fill($request->all())->save();

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
        $setting = Settings::FindOrFail($id);
        $setting->delete();
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

        $original = public_path() . '/assets/img/settings/originals/';;
        $thumbnail = public_path() . '/assets/img/settings/thumbnails/';
        $medium = public_path() . '/assets/img/settings/medium/';
        $paths = (object)compact('original', 'thumbnail', 'medium');
        return $paths;
    }
}
