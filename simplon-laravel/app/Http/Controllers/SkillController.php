<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $skills=Skill::all();
        return view('skill.index',['skills'=>$skills]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
return view('skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skill=new Skill();
        $validateData=$request->validate([
            'name'=>'required|unique:skills',
            'label'=>'required'
        ]);
        $skill->name=$validateData["name"];
        $skill->label=$validateData["label"];
        $skill->save();
        return redirect()->route('skill');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
        return view('skill.show',['skill'=>$skill]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        //
        return view('skill.edit',['skill'=>$skill]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|unique:skills',
            'label' => 'required'
        ]);
        $skill->name = $validatedData['name'];
        $skill->label = $validatedData['label'];
        $skill->update();
        return redirect()->route('skill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        //
        $skill->delete();
        return redirect()->route('skill');
    }
}
