<?php

namespace App\Http\Controllers;

use App\Models\ZipCode;
use App\Http\Resources\ZipCodeResource;
use Illuminate\Http\Request;

class ZipCodeController extends Controller
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
     * @param  \App\Models\ZipCode  $zipCode
     * @return \Illuminate\Http\Response
     */
    public function show($zip_code)
    {
        error_log($zip_code);
        $zc = ZipCode::find($zip_code);
        error_log($zc);
        if ($zc) {
            return response()->json(new ZipCodeResource($zc), 200);
        }
        return response()->json("", 404);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ZipCode  $zipCode
     * @return \Illuminate\Http\Response
     */
    public function edit(ZipCode $zipCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ZipCode  $zipCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ZipCode $zipCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ZipCode  $zipCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(ZipCode $zipCode)
    {
        //
    }
}
