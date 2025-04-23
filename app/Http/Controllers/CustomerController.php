<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\order;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $cus = customer::with('latestOrder')->find(2);
        // return $cus;
        // $cus = customer::with('smallestOrder')->find(2);
        $cus = customer::with('orders')->with('largestOrder')->find(2);
        return $cus;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $order = order::create([
            "amount" => 5000,
            "customer_id" => 2,
            "date" => "2025-01-13"
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
