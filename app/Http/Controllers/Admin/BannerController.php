<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id','DESC')->get();
        return view('admin.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required',
            'description'=>'string|nullable',
            'image'=>'nullable',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->input('tilte'));
        $identity_slug_count = Banner::where('slug',$slug)->count();

        if ($identity_slug_count > 0) {
            $slug = time().'-'.$slug;
        }
        $data['slug'] = $slug;
        // return $data;

        $banner_saved = Banner::create($data);

        if ($banner_saved) {
            return redirect()->route('banner.index')->with('success','Banner saved successfully');
        }
        else{
            return back()->with('errors','Something went wrong!');
        }
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        if ($banner) {
            return view('admin.banner.edit',compact('banner'));
        }else {
            return back()->with('error','data not found');
        }
        
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
        $banner = Banner::find($id);
        if ($banner) {
            $this->validate($request,[
                'title'=>'string|required',
                'description'=>'string|nullable',
                'image'=>'nullable',
            ]);
            $data = $request->all();
            
    
            $banner_saved = $banner->fill($data)->save();
    
            if ($banner_saved) {
                return redirect()->route('banner.index')->with('success','Banner updated successfully');
            }
            else{
                return back()->with('errors','Something went wrong!');
            }
        }else {
            return back()->with('error','data not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if ($banner) {
            $check_if = $banner->delete();
            if ($check_if) {
                return redirect()->route('banner.index')->with('success', 'Banner is deleted successfully');
            }else {
                return back()->with('error','something went wrong');
            }
        }else {
            return back()->with('error','data not found');
        }
    }
}
