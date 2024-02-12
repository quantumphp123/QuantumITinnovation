<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BlogCategory;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categories = BlogCategory::orderBy('name','ASC')->paginate(10);
        return view('admin.blog-category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog-category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'category_name' => 'required'
        ]);

        if($validator->fails()){

            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }else{

            $category = new BlogCategory();
            $category->name = $request->category_name;
            $category->save();

            return redirect()->route('category.index')->withSuccess('Category created successfully');
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
        $category =  BlogCategory::where('id',$id)->first();
        return view('admin.blog-category.edit',compact('category'));
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
        $validator = Validator::make($request->all(),[

            'category_name' => 'required'
        ]);

        if($validator->fails()){

            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }else{

            $category =  BlogCategory::where('id',$id)->first();
            $category->name = $request->category_name;
            $category->save();

            return redirect()->route('category.index')->withSuccess('Category updated successfully');
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
        $category =  BlogCategory::where('id',$id)->first();
        $category->delete();

        return redirect()->route('category.index')->withSuccess('Category deleted successfully');

    }
}
