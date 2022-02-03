<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tags.index',[
            'tags' => Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
       $validate_data= $request->validate([
            'name' =>'required',
            'description' => '' 
        ]);

        // dd($validate_data)

        // Tag::create($request->except(['_token']));
        //another goode way
        Tag::create($validate_data);

        return redirect()->to('/tags')->with('success' , 'Tag added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */

    //  a wAy to solve url name except id manuaal process

    // public function show($tagname) //select * from tags where id = '$tagname'
    // {
    //     //select * from tags where name = '$tagname'
    //     $tag =Tag::where('name', $tagname)->first();
    //     // $tag =Tag::whereName( $tagname)->first();

    //     return view('tags.show',compact('tag'));
    // }

    public function show(Tag $tag) //select * from tags where name = '$tagname'
    {
        // dd(request()->ip());
        return view('tags.show',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag) //select * from tags where id = '$tagname'
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
