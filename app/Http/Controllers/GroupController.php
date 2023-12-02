<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Resources\GroupResource;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Group =GroupResource::collection( Group::all());
         return $Group;
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
        $created_Group = new Day;
        $created_Group->full_name_of_the_student = $request->full_name_of_the_student;
        $created_Group->parent_number = $request->parent_number;
        $created_Group->contract_id = $request->contract_id;
        $created_Group->save();
        return $created_Group;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $group = Group::find($id);
        return $group;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        $groups = Group::find($request->id);
        $groups->full_name_of_the_student = $request->full_name_of_the_student;
        $groups->parent_number = $request->parent_number;
        $groups->contract_id = $request->contract_id;
        $groups->save();
        return $groups;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Group::destroy($id);
        return true; 
    }
}
