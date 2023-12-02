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
        $created_catalog = new CatalogOfCourses;
        $created_catalog->number_of_lessons = $request->number_of_lessons;
        $created_catalog->price = $request->price;
        $created_catalog->topics_to_study = $request->topics_to_study;
        $created_catalog->curriculum_id = $request->curriculum_id;
        $created_catalog->name = $request->name;
        $created_catalog->save();
        return $created_catalog;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $catalog = CatalogOfCourses::find($id);
        return $catalog;
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
       $catalog = CatalogOfCourses::find($request->id);
       $catalog->number_of_lessons = $request->number_of_lessons;
        $catalog->price = $request->price;
        $catalog->topics_to_study = $request->topics_to_study;
        $catalog->curriculum_id = $request->curriculum_id;
        $catalog->name = $request->name;
        $catalog->save();
        return $catalog;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      CatalogOfCourses::destroy($id);
      return true;  
    }
}
