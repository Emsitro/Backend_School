<?php

namespace App\Http\Controllers;

use App\Models\MagazineGroup;
use Illuminate\Http\Request;
use App\Http\Resources\MagazineGroupResource;

class MagazineGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $MagazineGroup =MagazineGroupResource::collection( MagazineGroup::all());
         return $MagazineGroup;
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
    public function show(MagazineGroup $magazineGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MagazineGroup $magazineGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MagazineGroup $magazineGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MagazineGroup $magazineGroup)
    {
        //
    }
}
