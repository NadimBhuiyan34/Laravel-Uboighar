<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function index()
    {
        $banners = Banner::all();
        return view('backend.banner.list', compact('banners'));
    }


    public function create()
    {
        return view('backend.banner.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'option' => 'required',
            'image' => 'required'
        ]);


        if ($file = $request->file('image')) {
            $filename = date('dmY') . time() . '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/banner'), $filename);
        }
        Banner::create(
            [
                'option' => $request->option,
                'image' => $filename,
                'is_active' => $request->is_active

            ]
        );
        return redirect()->route('banners.index')->with('message', 'Successfully Add');
    }



    public function edit(Banner $banner)
    {

        return view('backend.banner.edit', compact('banner'));
    }


    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
            'option' => 'required',
            'image' => 'required'
        ]);
        if ($file = $request->file('image')) {
            $filename = date('dmY') . time() . '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/banner'), $filename);
        }
        $banner->update(
            [
                'option' => $request->option,
                'image' => $filename ?? $banner->image,
                'is_active' => $request->is_active ?? false

            ]
        );
        return redirect()->route('banners.index')->with('message', 'Successfully ');
    }


    public function destroy(Banner $banner)
    {
        if ($banner) {
            $banner->delete();
            return redirect()->route('banners.index')->with('message', 'Delete Successfully');
        } else {
            return redirect()->back();
        }
    }
}
