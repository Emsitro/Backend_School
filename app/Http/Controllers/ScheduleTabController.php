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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ScheduleTab $scheduleTab)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScheduleTab $scheduleTab)
    {
        //
    }
}
