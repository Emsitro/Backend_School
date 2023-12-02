<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\Request;
use App\Http\Resources\CurriculumResource;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Curriculum =CurriculumResource::collection( Curriculum::all());
         return $Curriculum;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created_Curriculime = new Curriculum;
        $created_Curriculime->topic_activities = $request->topic_activities;
        $created_Curriculime->save();
        return $created_Curriculime;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $curricul = Curriculum::find($id);
        return $curricul;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curriculum $curriculum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curriculum $curriculum)
    {
        $Curriculimee = Curriculum::find($request->id);
        $Curriculimee->topic_activities = $request->topic_activities;
        $Curriculimee->save();
        return $Curriculimee;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Curriculum::destroy($id);
        return true; 
    }
}
