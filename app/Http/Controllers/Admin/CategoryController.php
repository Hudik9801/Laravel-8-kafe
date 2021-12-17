<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = DB::select('select * from categpries');
         //print_r($datalist);
         //exit();
        return view('admin.category', ['datalist' => $datalist]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function add()
    {
        $datalist=DB::table('categpries')->get()->where('parent_id',0);

        //print_r($datalist);
        //exit();

     return view('admin.category_add',['datalist'=>$datalist]);
    }
    /**
     *insert data
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
     * */

    public function create(Request $request)
    {

        DB::table('categpries')->insert([
            'parent_id' =>$request->input('parent_id'),
            'title' =>$request->input('title'),
            'keywords' =>$request->input('keywords'),
            'description' =>$request->input('description'),
            'slug' =>$request->input('slug'),
            'status' =>$request->input('status')
        ]);
        return redirect()->route('admin_category');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        DB::table('categpries')->where('id', '=', $id)->delete();
        return redirect()->route('admin_category');
    }
}
