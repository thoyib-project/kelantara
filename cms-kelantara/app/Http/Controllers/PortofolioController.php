<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $porto = Portofolio::latest()->get();
        return view('admin.portofolio.index', compact('porto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.portofolio.create');
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
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portofolio $portofolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portofolio $portofolio)
    {
        //
    }
}
