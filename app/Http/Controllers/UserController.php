<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Models\category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = item::with('category')->get();
        $category = Category::get();
        return view('useritem', compact('item','category'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = item::get();
        $category = Category::get();
        return view('admin.itemadd', compact('item','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = new item();
        // $filename = time().$request->file('pic')->getClientOriginalName();
        // $path = $request->file('pic')->store('public/images');
        // $data->image = '/storage/'.$path;
        // $data->name = $request->name;
        // $data->description = $request->description;
        // $data->category_id = $request->category_id;
        // $data->save();
        // return redirect('/items')->with('success', 'Added Successfully');
        
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
        $data = item::findOrFail($id);
        $data->name = $request->name;
        $data->code = $request->code;
        $data->save();

        return redirect('/items')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)    
    {
        item::destroy($id);
        return redirect('/categories')->with('success', ' deleted successfully');
    }
}


