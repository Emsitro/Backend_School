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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ListOfTeacher $listOfTeacher)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListOfTeacher $listOfTeacher)
    {
        //
    }
}
