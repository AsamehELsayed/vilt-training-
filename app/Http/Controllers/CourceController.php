<?php

namespace App\Http\Controllers;

use App\Models\Cource;
use App\Http\Requests\StoreCourceRequest;
use App\Http\Requests\UpdateCourceRequest;

class CourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('dashboard/cources/index', [
            'cources' => Cource::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('dashboard/cources/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cource $cource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cource $cource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourceRequest $request, Cource $cource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cource $cource)
    {
        //
    }
}
