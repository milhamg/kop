<?php

namespace App\Http\Controllers;

use App\Models\Kredit;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('kredit.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('kredit.create');
    }


    /**
     * Display the specified resource.
     *
     * @param Kredit $kredit
     * @return View
     */
    public function show(Kredit $kredit): View
    {
        return view('kredit.show', compact('kredit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Kredit $kredit
     * @return Response
     */
    public function edit(Kredit $kredit)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Kredit $kredit
     * @return Response
     */
    public function update(Request $request, Kredit $kredit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Kredit $kredit
     * @return Response
     */
    public function destroy(Kredit $kredit)
    {
        //
    }
}
