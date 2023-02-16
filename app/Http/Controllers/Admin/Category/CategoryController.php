<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriesList = Category::latest()->get();

        return view('admin.category.category-list', compact('categoriesList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();

        $notification = [
            'messege'=>'New Category added successfuly!',
            'alert-type'=>'success'
        ];
        
        return redirect()->back()->with($notification);
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
        $categoryEditForm = Category::findOrFail($id);

        return view('admin.category.category-edit-form', compact('categoryEditForm'));
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
        $validateData = $request->validate([
            'category_name' => 'required|max:255',
        ]);

        $data = [];
        $data['category_name'] = $request->category_name;
        $update = DB::table('categories')->where('id', $id)->update($data);
        if ($update) {
            $notification = [
            'messege' => 'Category updated successfully!',
            'allert-type' => 'success'
        ];
            return redirect()->route('categories.index')->with($notification);
        } else {
            $notification = [
            'messege' => 'Nothing to update!',
            'allert-type' => 'error'
        ];
            return redirect()->route('categories.index')->with($notification);
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
        // $categoryDelID = Category::find($id);
        // $categoryDelID->delete();
        // $category = DB::table('categories')->where('id', $id)->delete();
        Category::findOrFail($id)->delete();
        $notification = [
            'messege' => 'Category deleted!',
            'allert-type' => 'info'
        ];
    
        return redirect()->back()->with($notification);
    }
}
