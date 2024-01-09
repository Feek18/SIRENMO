<?php

namespace App\Http\Controllers;

use App\Models\PesananDrivers;
use Illuminate\Http\Request;
use App\Models\Drivers;
use Illuminate\Support\Facades\Auth;

class PesananDriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('drivers.pages.pesanancust', [
            'userId' => Drivers::where('user_id', Auth::user()->id)->first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PesananDrivers  $pesananDrivers
     * @return \Illuminate\Http\Response
     */
    public function show(PesananDrivers $pesananDrivers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PesananDrivers  $pesananDrivers
     * @return \Illuminate\Http\Response
     */
    public function edit(PesananDrivers $pesananDrivers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PesananDrivers  $pesananDrivers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PesananDrivers $pesananDrivers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PesananDrivers  $pesananDrivers
     * @return \Illuminate\Http\Response
     */
    public function destroy(PesananDrivers $pesananDrivers)
    {
        //
    }
}
