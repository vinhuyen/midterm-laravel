<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Vegetable;
use Illuminate\Http\Request;

class VegetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //
        $vegetables = Vegetable::all();
        return view('homepage',compact('vegetables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('add', compact('categories') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'vegetable' => 'required|max:255',
            'new_price' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'vegetable.required' => 'Need fill the name of vegetable',
            'new_price.required' => 'Need fill the price',
            'new_price.integer' => 'Must a number',
            'image.mimes'=>'Accept the image',
            'image.max'=>'Only an image has size less than 2Mb'
        ]);

//

        $file = $request->file('image');
        $name = time().'_'.$file->getClientOriginalName();
        $destinationPath = public_path('images');
        $file->move($destinationPath, $name);

        $vegetable = new Vegetable();
        $vegetable->vegetable = $request->input("vegetable");
        $vegetable->new_price = $request->input("new_price");
        $vegetable->category_id = $request->input("category_id");
        $vegetable->image = $name;
        $vegetable->save();


        return redirect('/vegetables')->with('success', 'Vegetable is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vegetable  $vegetable
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */


    public function detail($id){

        $vegetables = Vegetable::find($id);
        return view('detail', compact('vegetables'));
    }

    public function show(Vegetable $vegetable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function edit(Vegetable $vegetable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vegetable $vegetable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vegetable $vegetable)
    {
        //
    }
}
