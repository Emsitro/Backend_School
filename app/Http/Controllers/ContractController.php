<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use App\Http\Resources\ContractResource;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Contract =ContractResource::collection( Contract::all());
         return $Contract;
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
        $created_contrac = new Contract;
        $created_contrac->full_name_of_the_student = $request->full_name_of_the_student;
        $created_contrac->parents_full_name = $request->parents_full_name;
        $created_contrac->price = $request->price;
        $created_contrac->parent_number = $request->parent_number;
        $created_contrac->date_start_of_training = $request->date_start_of_training;
        $created_contrac->catalog_of_cousrses_id = $request->catalog_of_cousrses_id;
        $created_contrac->save();
        return $created_contrac;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contrac = Contract::find($id);
        return $contrac;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contract $contract)
    {
        $contrac = Contract::find($request->id);
        $contrac->full_name_of_the_student = $request->full_name_of_the_student;
        $contrac->parents_full_name = $request->parents_full_name;
        $contrac->price = $request->price;
        $contrac->parent_number = $request->parent_number;
        $contrac->date_start_of_training = $request->date_start_of_training;
        $contrac->catalog_of_cousrses_id = $request->catalog_of_cousrses_id;
        $contrac->save();
        return $contrac;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Contract::destroy($id);
        return true;  
    }
}
