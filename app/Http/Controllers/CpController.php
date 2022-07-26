<?php

namespace App\Http\Controllers;

use App\Models\Cp;
use Illuminate\Http\Request;

class CpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Cp  $cp
     * @return \Illuminate\Http\Response
     */
    public function show($zip_code)
    {
        $cp = Cp::find($zip_code);
        if ($cp) {
            return response()->json(['cp' => $cp], 200);
        }
        return response()->json(['cp' => null], 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cp  $cp
     * @return \Illuminate\Http\Response
     */
    public function edit(Cp $cp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cp  $cp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cp $cp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cp  $cp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cp $cp)
    {
        //
    }
    
    public function getZipCode($zip_code)
    {       
        $cp = Cp::find($zip_code);
        if ($cp) {
            return response()->json(['cp' => $cp], 200);
        }
        return response()->json(['cp' => null], 404);
    }
}
