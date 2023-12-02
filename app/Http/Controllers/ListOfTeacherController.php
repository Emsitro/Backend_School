<?php

namespace App\Http\Controllers;

use App\Models\ListOfTeacher;
use Illuminate\Http\Request;
use App\Http\Resources\ListOfTeacherResource;

class ListOfTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ListOfTeacher =ListOfTeacherResource::collection( ListOfTeacher::all());
         return $ListOfTeacher;
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
        $created_Teacher = new Day;
        $created_Teacher->teacherscol = $request->teacherscol;
        $created_Teacher->full_name_of_the_teacher = $request->full_name_of_the_teacher;
        $created_Teacher->specialization = $request->specialization;
        $created_Teacher->save();
        return $created_Teacher;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $listOfTeacher = ListOfTeacher::find($id);
        return $listOfTeacher;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListOfTeacher $listOfTeacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ListOfTeacher $listOfTeacher)
    {
        $listOfTeachera = ListOfTeacher::find($request->id);
        $listOfTeachera->teacherscol = $request->teacherscol;
        $listOfTeachera->full_name_of_the_teacher = $request->full_name_of_the_teacher;
        $listOfTeachera->specialization = $request->specialization;
        $listOfTeachera->save();
        return $listOfTeachera;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ListOfTeacher::destroy($id);
        return true; 
    }
}
