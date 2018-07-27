<?php

namespace App\Http\Controllers;

use App\Post;
use App\Domain;

use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store()
    { 
        $data = request()->all();
      
            Post::create([

               

                'title' =>$data['title'],

                'domain_id' => $data['domainid'],
                
                'url' =>$data['url'],


            ]);

        return view('tosee.body');

      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $post= Post::find($id);

        $count = $post->count;

        $frequency = $post->frequency;

        $nextvisit = $post->nextvisit;

        $now=Carbon::now(3);

        $dt= $now->toTimeString();

        $post-> lastvisitdisplay = $dt;

        $now1 = $now->toTimeString();

        $timepast = $post-> lastvisit;

        $time1 = $post-> lastvisit = $now ->format('H');

        $acumo = $time1+$timepast;

        $timepast= $time1;

        $post-> lastvisit = $time1;

        $post-> acumo = $acumo;

        $count= $count +1;

        $post-> count = $count;

        $frequency= $acumo/$count;

        $acumo =0;

        $post-> frequency = $frequency;

        $nextvisit = $now->addMinutes($frequency)->toTimeString();

        $post-> nextvisit = $nextvisit;
    
        $post->save();

        return view('tosee.singlepost' ,compact('post'));


            }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
