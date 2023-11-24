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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TuitionPayment $tuitionPayment)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TuitionPayment $tuitionPayment)
    {
        //
    }
}
