<?php

namespace App\Http\Controllers;

use App\Models\TuitionPayment;
use Illuminate\Http\Request;
use App\Http\Resources\TuitionPaymentResource;

class TuitionPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TuitionPayment =TuitionPaymentResource::collection( TuitionPayment::all());
         return $TuitionPayment;
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
        $created_Payment = new TuitionPayment;
        $created_Payment->price = $request->price;
        $created_Payment->contract_id = $request->contract_id;
        $created_Payment->catalog_of_courses_id = $request->catalog_of_courses_id;
        $created_Payment->save();
        return $created_Payment;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tuitionPayment = TuitionPayment::find($id);
        return $tuitionPayment;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TuitionPayment $tuitionPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TuitionPayment $tuitionPayment)
    {
        $tuitionPaymente = TuitionPayment::find($request->id);
        $tuitionPaymente->price = $request->price;
        $tuitionPaymente->contract_id = $request->contract_id;
        $tuitionPaymente->catalog_of_courses_id = $request->catalog_of_courses_id;
        $tuitionPaymente->save();
        return $tuitionPaymente;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        TuitionPayment::destroy($id);
        return true; 
    }
}
