<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Subcategory;
use Illuminate\Support\Facades\DB;

class SubcategoryController extends Controller
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
        $subcategoryList = Subcategory::all();
        return view('admin.category.subcategory-list', compact('subcategoryList'));
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
            'subcategory_name' => 'required|unique:subcategories|max:255',
        ]);
        $subcategory = new Subcategory();
        $subcategory->subcategory_name = $request->subcategory_name;
        $subcategory->save();
        // $data = [];
        // $data['subcategory_name'] = $request->subcategory_name;
        // DB::table('subcategories')->insert($data);
        $notification=array(
                    'messege'=>'New Subcategory added successfuly!',
                    'alert-type'=>'success'
                        );

            return Redirect()->back()->with($notification);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catDelID = Subcategory::find($id);
        $catDelID->delete();

        $notification=array(
                    'messege'=>'Subcategory deleted successfuly!',
                    'alert-type'=>'success'
                        );

        return Redirect()->back()->with($notification);
    }
}
