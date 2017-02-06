<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;

use App\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $tags = array();
        $tags = DB::table('tags')->select('id', 'name')->get();

        $data['tags'] = $tags;
        $data['isAddForm'] = true;
        $data['isEditForm'] = false;

        return view('tags.index')->with($data);
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
        $this->validate($request, array(
            'name' => 'required|min:4|max:255'
        ));
        
        $tag = new Tag;
        $tag->name = $request->input('name');
        
        $tag->save();
        
        Session::flash('success', "Tag '\"$tag->name\"' has been added");
        
        return redirect()->route('tags.index');
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
        $data = $editedTag = $tags = array();

        $tags = DB::table('tags')->select('id', 'name')->where('id', '!=', $id)->get();
        
        $editedTag = DB::table('tags')->select('id', 'name')->where('id', '=', $id)->first();
        
        $data['tags'] = $tags;
        $data['editedTag'] = $editedTag;
        $data['isAddForm'] = false;
        $data['isEditForm'] = true;

        return view('tags.index')->with($data);
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
        $this->validate($request, array(

            'name' => 'required|min:4|max:255'
        ));
        
        $editedTag = array();

        $editedTag = Tag::find($id);
        $editedTag->name = $request->input('name');
        
        $editedTag->save();
        
        Session::flash('success', 'Tag has been updated.');
        
        return redirect()->route('tags.index');
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
