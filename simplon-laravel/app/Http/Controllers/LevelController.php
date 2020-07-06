<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $levels=Level::all();
        return view('level.index',['levels'=>$levels]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('level.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //on crée une instance du modele level
        $level=new level();
        // on crée le tableau de validation
        $validateData=$request->validate(["level_label"=>"required | unique:levels"]);
        $level->level_label=$validateData["level_label"];
        $level->save();
        return redirect()->route('levels');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function show(Level $level)
    {
        return view('level.show', ["level" => $level]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        //
        return view('level.edit',["level"=>$level]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Level $level)
    {
        //
        $validatedData = $request->validate([
            'level_label' => 'required | unique:levels',
        ]);
        $level->level_label = $validatedData['level_label'];
        $level->update();
        return redirect()->route('levels');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {
        //
        $level->delete();
        return redirect()->route('levels');
    }
}
