<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use App\BlogCategory;
use Validator;
use App\BlogCatAssign;
use Illuminate\Support\Facades\Input;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id','DESC')->paginate(10);
        return view('admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = BlogCategory::all();
        return view('admin.blogs.add',compact('categories'));
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

            'blog_title' => 'required',
            'blog_description' => 'required',
            'blog_image' => 'required',
            'date' => 'required',
            'url' => 'required',
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
        ]);

        if($validator->fails()){

            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }else{
            
            $blogs = new Blog();
            $blogs->title = $request->blog_title;
            $blogs->description = $request->blog_description;
            $blogs->date = $request->date;
            $blogs->url = $request->url;
            $blogs->meta_title = $request->meta_title;
            $blogs->meta_keywords = $request->meta_keywords;
            $blogs->meta_description = $request->meta_description;
            
            if ($files = $request->file('blog_image')) {
                // Define upload path
               $destinationPath = public_path('/blogs-image/'); // upload path
                // Upload Orginal Image 
                $input['name']=time().'.'.$files->getClientOriginalExtension();
                $files->move($destinationPath,$input['name']);
                // Save In Database 
               $blogs->image=$input['name'];       
            }

            if($blogs->save()){

                foreach ($request->category as $key => $value) {
                    $category = new BlogCatAssign();
                    $category->category_id = $value;
                    $category->blog_id = $blogs->id;
                    $category->save();
                }
            }

            return redirect()->route('blog.index')->withSuccess('Blog created successfully');
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
        $blogs = Blog::where('id',$id)->first();
        $category = BlogCatAssign::with('categoryDetails')->where('blog_id',$id)->get();

        return view('admin.blogs.view',compact('blogs','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Blog::where('id',$id)->first();
        $assign_category = BlogCatAssign::with('categoryDetails')->where('blog_id',$id)->pluck('category_id')->toArray();
        $categories = BlogCategory::all();
        return view('admin.blogs.edit',compact('blogs','assign_category','categories'));
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

            'blog_title' => 'required',
            'blog_description' => 'required',
            'date' => 'required',
            'url' => 'required',
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
        ]);

        if($validator->fails()){

            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }else{

            $blogs = Blog::where('id',$id)->first();
            $blogs->title = $request->blog_title;
            $blogs->description = $request->blog_description;
            $blogs->date = $request->date;
            $blogs->url = $request->url;
            $blogs->meta_title = $request->meta_title;
            $blogs->meta_keywords = $request->meta_keywords;
            $blogs->meta_description = $request->meta_description;
            if ($files = $request->file('blog_image')) {
                // Define upload path
               $destinationPath = public_path('/blogs-image/'); // upload path
                // Upload Orginal Image 
                $input['name']=time().'.'.$files->getClientOriginalExtension();
                $files->move($destinationPath,$input['name']);
                // Save In Database 
               $blogs->image=$input['name'];       
            }

            if($blogs->save()){

                $assign_category = BlogCatAssign::where('blog_id',$id)->delete();

                foreach ($request->category as $key => $value) {
                    $category = new BlogCatAssign();
                    $category->category_id = $value;
                    $category->blog_id = $blogs->id;
                    $category->save();
                }
            }

            return redirect()->route('blog.index')->withSuccess('Blog updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function uploadImage(Request $request) {

        $CKEditor = $request->input('CKEditor');
        $funcNum  = $request->input('CKEditorFuncNum');
        $message  = $url = '';
        if (Input::hasFile('upload')) {
            $file = Input::file('upload');
            if ($file->isValid()) {
                $filename =rand(1000,9999).$file->getClientOriginalName();
                $file->move(public_path().'/blogs-image/', $filename);
                $url = url('blogs/' . $filename);
            } else {
                $message = 'An error occurred while uploading the file.';
            }
        } else {
            $message = 'No file uploaded.';
        }
        return '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog =  Blog::where('id',$id)->first();
        if($blog->delete()){

            $assign_category = BlogCatAssign::where('blog_id',$id)->delete();

        }

        return redirect()->route('category.index')->withSuccess('Category deleted successfully');

    }
}
