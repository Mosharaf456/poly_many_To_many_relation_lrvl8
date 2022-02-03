<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('videos.index',[
            'videos' => Video::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.create' , [
            'tags'=>Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tags = $request->tags;
        // dd($tags);

        // Video::create(request()->all());
        $video= Video::create(request()->except('_token','tags'));


        $tags = Tag::find($tags);

        // $tags = Tag::where('id',$tags)->get();

        // dd($tags);

        $video->tags()->attach($tags);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('videos.show' ,[
            'video' => Video::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::find($id);
        $selected_tag = $video->tags->pluck('id');
        // return $selected_tag;
        
        return view('videos.edit' ,[
            'video' => $video,
            'tags'=>Tag::all(),
            'selected_tag' => $selected_tag
        ]);
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
        // form validation
        request()->validate([
            'url' => 'required | min:3'
        ]);
        // dd('Testing method find or not!!');
        //form value
        $tags = $request->tags;
        // dd($tags);
        // current original data from database
        $video= Video::find($id);

        $video->update(request()->except('_token','tags'));


        // find tag in database to confirm tag //validation purpose must use

        $tags_form_database = Tag::find($tags);

        //1st way
        //// old file detach
        // $video->tags()->detach($video->tags);
        // //new edited file attach
        // $video->tags()->attach($tags_form_database);

        //2nd way optimize
        $video->tags()->sync($tags_form_database);

        return back();
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
