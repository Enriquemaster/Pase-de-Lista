<?php

namespace App\Http\Controllers;

use App\Models\ClaseStudent;
use App\Http\Requests\StoreClaseStudentRequest;
use App\Http\Requests\UpdateClaseStudentRequest;

class ClaseStudentController extends Controller
{
    use HasFactory;


    public function index()
    {
        //
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
    public function store(StoreClaseStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ClaseStudent $claseStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClaseStudent $claseStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClaseStudentRequest $request, ClaseStudent $claseStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClaseStudent $claseStudent)
    {
        //
    }
}
