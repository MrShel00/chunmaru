<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Http\Requests\StorebarangRequest;
use App\Http\Requests\UpdatebarangRequest;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = DB::table('barang')->get();

        return view ('home', ['barang' => $barang]);
    }

    public function womanShoes() {
        $barang = DB::table('barang')->get();

        return view ('woman.sepatu', ['barang' => $barang]);
    }


    public function manShoes() {
        $barang = DB::table('barang')->get();

        return view ('man.sepatu', ['barang' => $barang]);
    }

    public function manAccesoriss() {
        $barang = DB::table('barang')->get();

        return view ('man.aksesoris', ['barang' => $barang]);
    }

    public function womanAccesoriss() {
        $barang = DB::table('barang')->get();

        return view ('woman.aksesoris', ['barang' => $barang]);
    }

    public function manClothes() {
        $barang = DB::table('barang')->get();

        return view ('man.baju', ['barang' => $barang]);
    }

    public function womanClothes() {
        $barang = DB::table('barang')->get();

        return view ('woman.baju', ['barang' => $barang]);
    }

    public function detail() {
        $barang = DB::table('barang') -> get();

        return view('detail.view', ['barang' => $barang]);
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
     * @param  \App\Http\Requests\StorebarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebarangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebarangRequest  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebarangRequest $request, barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        //
    }
}
