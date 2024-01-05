<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Http\Requests\StoreCustomersRequest;
use App\Http\Requests\UpdateCustomersRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $searchTerm = request('search');

        $cust = DB::table('customers')
            ->when($searchTerm, function ($query) use ($searchTerm) {
                return $query->where('nama', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('nik', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('telepon', 'LIKE', '%' . $searchTerm . '%');
            })
            ->paginate(1);

        return view('admin.pages.data-customers', [
            'customers' => $cust,
            'users' => User::where('role', '!=', 'drivers')->get()
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
     * @param  \App\Http\Requests\StoreCustomersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomersRequest $request)
    {
        //
        $validatedData = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'user_id' => 'required',
            'foto_sim' => 'image|file'
        ]);

        if ($request->file('foto_sim')) {
            # code...
            $validatedData['foto_sim'] = $request->file('foto_sim')->store('foto-sistem');
        }

        Customers::create($validatedData);
        return redirect('/data-customers')->with('flash', 'Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers, $id)
    {
        //
        $customers = Customers::find($id);
        $users = User::find($customers->user_id);
        return response()->json([
            'status' => 200,
            'customers' => $customers,
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomersRequest  $request
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomersRequest $request, Customers $customers)
    {
        //
        $validatedData = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'user_id' => 'required',
            'foto_sim' => 'image|file'
        ]);

        if ($request->file('foto_sim')) {
            # code...
            if ($request->oldSIM) {
                # code...
                Storage::delete($request->oldSIM);
            }
            $validatedData['foto_sim'] = $request->file('foto_sim')->store('foto-sistem');
        }

        Customers::where('id', $request->id)
            ->update($validatedData);
        return redirect('/data-customers')->with('flash', 'Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers, $id)
    {
        //
        if ($customers->foto_sim) {
            Storage::delete($customers->foto_sim);
        }

        // Menghapus entri kendaraan dari database
        $customers->findOrFail($id)->delete();

        // Redirect ke halaman data-kendaraan setelah penghapusan
        return redirect('/data-customers')->with('flash', 'Dihapus!');
    }
}
