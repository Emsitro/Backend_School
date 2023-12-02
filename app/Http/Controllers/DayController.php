<?php

namespace App\Http\Controllers;

use App\Models\Day;
use Illuminate\Http\Request;
use App\Http\Resources\DayResource;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Day =DayResource::collection( Day::all());
         return $Day;
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
        $created_day = new Day;
        $created_day->day_name = $request->day_name;
        $created_day->save();
        return $created_day;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $day = Day::find($id);
        return $day;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Day $day)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Day $day)
    {
        $dayy = Day::find($request->id);
        $dayy->day_name = $request->day_name;
        $dayy->save();
        return $dayy;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Day::destroy($id);
        return true; 
    }
}
