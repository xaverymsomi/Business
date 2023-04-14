<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('id','DESC')->get();
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'category_name'=>'string|required',
            'category_summary'=>'string|required',
            'category_image'=>'nullable',
            'category_status'=>'nullable'
        ]);
        $data = $request->all();

        $categorySave = Category::create($data);

        if ($categorySave) {
            return redirect()->route('category.index')->with('success','Category saved successfully');
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
        $category = Category::find($id);
        if ($category) {
            return view('admin.category.edit',compact('category'));
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
        $category = Category::find($id);
        if ($category) {
            $this->validate($request,[
                'category_name'=>'string|required',
                'category_summary'=>'string|required',
                'category_image'=>'nullable',
                'status'=>'nullable'
            ]);
            $data = $request->all();
            
    
            $banner_saved = $category->fill($data)->save();
    
            if ($banner_saved) {
                return redirect()->route('category.index')->with('success','Category updated successfully');
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
        //
    }
}
