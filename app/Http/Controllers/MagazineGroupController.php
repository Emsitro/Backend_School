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
        $created_Magazine = new Day;
        $created_Magazine->group_id = $request->group_id;
        $created_Magazine->name = $request->name;
        $created_Magazine->save();
        return $created_Magazine;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $magazineGroup = MagazineGroup::find($id);
        return $magazineGroup;
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
        $magazineGroupa = MagazineGroup::find($request->id);
        $magazineGroupa->group_id = $request->group_id;
        $magazineGroupa->name = $request->name;
        $magazineGroupa->save();
        return $magazineGroupa;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MagazineGroup::destroy($id);
        return true; 
    }
}
