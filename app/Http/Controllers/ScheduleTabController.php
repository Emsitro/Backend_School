<?php

namespace App\Http\Controllers;

use App\Models\ScheduleTab;
use Illuminate\Http\Request;
use App\Http\Resources\ScheduleTabResource;

class ScheduleTabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ScheduleTab =ScheduleTabResource::collection( ScheduleTab::all());
         return $ScheduleTab;
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
        $created_Scheduletabs = new Day;
        $created_Scheduletabs->list_of_teachers_id = $request->list_of_teachers_id;
        $created_Scheduletabs->magazine_groups_id = $request->magazine_groups_id;
        $created_Scheduletabs->time = $request->time;
        $created_Scheduletabs->cabinet = $request->cabinet;
        $created_Scheduletabs->save();
        return $created_Scheduletabs;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $scheduleTab = ScheduleTab::find($id);
        return $scheduleTab;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScheduleTab $scheduleTab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ScheduleTab $scheduleTab)
    {
        $scheduleTabl = ScheduleTab::find($request->id);
        $scheduleTabl->list_of_teachers_id = $request->list_of_teachers_id;
        $scheduleTabl->magazine_groups_id = $request->magazine_groups_id;
        $scheduleTabl->time = $request->time;
        $scheduleTabl->cabinet = $request->cabinet;
        $scheduleTabl->save();
        return $scheduleTabl;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ScheduleTab::destroy($id);
        return true; 
    }
}
