<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;
use App\Models\Customers;
use App\Models\Drivers;
use App\Models\Kendaraan;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.pages.data-pesanan', [
            'pesanans' => Pesanan::all(),
            'customers' => Customers::all(),
            'drivers' => Drivers::all(),
            'kendaraan' => Kendaraan::all()
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
     * @param  \App\Http\Requests\StorePesananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePesananRequest $request)
    {
        //
        $validatedData = $request->validate([
            'kode' => 'required',
            'tgl_ambil' => 'required',
            'tgl_kembali' => 'required',
            'customer_id' => 'required',
            'driver_id' => 'required',
            'kendaraan_id' => 'required'
        ]);

        Pesanan::create($validatedData);
        return redirect('/data-pesanan')->with('flash', 'Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesanan $pesanan, $id)
    {
        //
        $pesanan = Pesanan::find($id);
        return response()->json([
            'status' => 200,
            'pesanan' => $pesanan,
            'customers' => Customers::find($pesanan->customer_id),
            'drivers' => Drivers::find($pesanan->driver_id),
            'kendaraan' => Kendaraan::find($pesanan->kendaraan_id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePesananRequest  $request
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePesananRequest $request, Pesanan $pesanan)
    {
        //
        $validatedData = $request->validate([
            'kode' => 'required',
            'tgl_ambil' => 'required',
            'tgl_kembali' => 'required',
            'customer_id' => 'required',
            'driver_id' => 'required',
            'kendaraan_id' => 'required'
        ]);

        Pesanan::where('id', $request->id)->update($validatedData);
        return redirect('/data-pesanan')->with('flash', 'Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $pesanan, $id)
    {
        // Menghapus entri kategori dari database
        $pesanan->findOrFail($id)->delete();

        // Redirect ke halaman data-kategori setelah penghapusan
        return redirect('/data-pesanan')->with('flash', 'Dihapus!');;
    }
}
