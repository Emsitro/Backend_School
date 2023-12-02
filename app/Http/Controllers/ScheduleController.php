<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Http\Resources\ScheduleResource;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Schedule =ScheduleResource::collection( Schedule::all());
         return $Schedule;
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
        $created_Schedulee = new Day;
        $created_Schedulee->schedule_tab_id = $request->schedule_tab_id;
        $created_Schedulee->day_id = $request->day_id;
        $created_Schedulee->save();
        return $created_Schedulee;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $schedule = Schedule::find($id);
        return $schedule;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        $schedulee = Schedule::find($request->id);
        $schedulee->schedule_tab_id = $request->schedule_tab_id;
        $schedulee->day_id = $request->day_id;
        $schedulee->save();
        return $schedulee;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Schedule::destroy($id);
        return true; 
    }
}
