<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dvd;


class FrondendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dvd = dvd::orderBy('created_at', 'DESC')->get();

        return view('frondend.index', compact('dvd'));
    }

    public function detail_penyewaan()
    {
        $dvd = dvd::orderBy('created_at', 'DESC')->get();
        return view('frondend.detail');
    }
    public function main_bayar()
    {
        return view('frondend.bayar');
    }
    public function rekomendasi_film()
    {
        return view('frondend.search');
    }
    public function kebijakandanprivasi()
    {
        return view('frondend.sandk');
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
    public function show(string $id)
    {
        $dvd = dvd::find($id);
        return view ('frondend.details', compact('dvd'));
        
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
