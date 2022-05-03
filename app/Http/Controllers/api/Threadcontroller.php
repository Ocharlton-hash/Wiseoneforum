<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Thread;
use App\Http\Resources\Thread as ThreadResource;

class Threadcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::all();
        return response()->json([$threads]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create a new thread record
        $thread = new Thread();
        $thread->title = $request->input('title');
        $thread->body = $request->input('body');
        $thread->save();

        return response()->json([$thread]);
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thread = Thread::findOrFail($id);
        return response()->json([$thread]);
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
        $thread = Thread::findOrFail($id);
        $thread->title = $request->input('title');
        $thread->body = $request->input('body');
        $thread->save();
        return response()->json([$thread]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $threads = Thread::findOrFail($id);
        if($thread->delete()){
            return response()->json([$thread]);
        }
    }
}
