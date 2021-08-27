<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAnggotaRequest;
use App\Models\Anggota;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('anggota.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Anggota $anggota
     * @return Response
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Anggota $anggota
     * @return View
     */
    public function edit(Anggota $anggota): View
    {
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAnggotaRequest $request
     * @param Anggota $anggota
     * @return RedirectResponse
     */
    public function update(UpdateAnggotaRequest $request, Anggota $anggota)
    {
        $data = $request->validated();
        $anggota->update($data);

        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Anggota $anggota
     * @return Response
     */
    public function destroy(Anggota $anggota)
    {
        //
    }
}
