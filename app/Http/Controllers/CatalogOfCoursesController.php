<?php

namespace App\Http\Controllers;

use App\Models\CatalogOfCourses;
use Illuminate\Http\Request;
use App\Http\Resources\CatalogOfCoursesResource;

class CatalogOfCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
         $Catalog =CatalogOfCoursesResource::collection( CatalogOfCourses::all());
         return $Catalog;
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
    public function show(CatalogOfCourses $catalogOfCourses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CatalogOfCourses $catalogOfCourses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CatalogOfCourses $catalogOfCourses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CatalogOfCourses $catalogOfCourses)
    {
        //
    }
}
