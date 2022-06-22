<?php

namespace App\Http\Controllers;

use App\Models\bedrijven;
use Illuminate\Http\Request;

class bedrijvenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
	    $posts = bedrijven::all(); //fetch all posts from DB
        
	return view('result', [
        'posts' => $posts,
    ]); //returns the view with posts
	    //return $posts; //returns the fetched posts
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
        $newPost = bedrijven::create([
            'bedrijfnaam' => $request->bedrijfnaam,
            'postcode' => $request->postcode,
            'branche' => $request->branche,
            'werknemers' => $request->werknemers,
            'gebouwen' => $request->gebouwen,
            'grondoppervlak' => $request->grondoppervlak,
            'bouwoppervlak' => $request->bouwoppervlak,
            
        /*Schema::create('bedrijven', function (Blueprint $table) {
            $table->id();
            $table->string('bedrijfnaam');
            $table->integer('postcode');
            $table->string('branche');
            $table->integer('werknemers');
            $table->integer('gebouwen');
            $table->integer('grondoppervlak');
            $table->integer('bouwoppervlak');
            $table->date('updated_at');
            $table->date('created_at');
        });*/
        ]);

        return redirect('bedrijven/' . $newPost->id);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bedrijven  $bedrijven
     * @return \Illuminate\Http\Response
     */
    public function show(bedrijven $bedrijven)
    {
        return view('show', [
            'post' => $bedrijven,
        ]); //returns the view with the post
        //return $bedrijven;
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bedrijven  $bedrijven
     * @return \Illuminate\Http\Response
     */
    public function edit(bedrijven $bedrijven)
    {
        return view('edit', [
            'post' => $bedrijven,
        ]); //returns the edit view with the post
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bedrijven  $bedrijven
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bedrijven $bedrijven)
    {
        //
        $bedrijven->update([
            'bedrijfnaam' => $request->bedrijfnaam,
            'postcode' => $request->postcode,
            'branche' => $request->branche,
            'werknemers' => $request->werknemers,
            'gebouwen' => $request->gebouwen,
            'grondoppervlak' => $request->grondoppervlak,
            'bouwoppervlak' => $request->bouwoppervlak,
        ]);

        return redirect('bedrijven/' . $bedrijven->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bedrijven  $bedrijven
     * @return \Illuminate\Http\Response
     */
    public function destroy(bedrijven $bedrijven)
    {
        //
        $bedrijven->delete();

        return redirect('/');
    }
}
