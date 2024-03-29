<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        //
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        $form_data = $request->validated();
        
        $comic = new Comic();
        // $comic->fill($form_data);
        

        $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type'];
        $comic->price = $form_data['price'];

        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]); //Pattern post - redirect - get
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        // dd($comic);
        return view ('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view ('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, $id)
    {
        $form_data = $request->validated();
        $comic_to_modify = Comic::findOrFail($id);
        // $comic_to_modify->title = $form_data['title'];
        // $comic_to_modify->description = $form_data['description'];
        // $comic_to_modify->thumb = $form_data['thumb'];
        // $comic_to_modify->price = $form_data['price'];
        // $comic_to_modify->series = $form_data['series'];
        // $comic_to_modify->sale_date = $form_data['sale_date'];
        // $comic_to_modify->type = $form_data['type'];
        $comic_to_modify->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic_to_modify->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
