<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Models\Compra;


class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compras = Compra::with('proveedor')->paginate(10); // eager loading
        return view('compras.index', compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = Proveedor::all(); // 👈 necesario para el select
        return view('compras.create', compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'proveedor_id'   => 'required|integer',
            'numero_factura' => 'nullable|string|max:100',
            'fecha_compra'   => 'required|date',
            'monto_total'    => 'required|numeric|min:0',
            'estado'         => 'required|string|max:50',
        ]);

        Compra::create($validated);

        return redirect()->route('compras.index')->with('success', 'Compra creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compra $compra)
    {
        $proveedores = Proveedor::all(); // 👈 necesario para el select
        return view('compras.edit', compact('compra', 'proveedores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Compra $compra)
    {
        $validated = $request->validate([
            'proveedor_id'   => 'required|integer',
            'numero_factura' => 'nullable|string|max:100',
            'fecha_compra'   => 'required|date',
            'monto_total'    => 'required|numeric|min:0',
            'estado'         => 'required|string|max:50',
         ]);

        $compra->update($validated);

        return redirect()->route('compras.index')->with('success', 'Compra actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compra $compra)
    {
        $compra->delete();
        return redirect()->route('compras.index')
                         ->with('success', 'Compra eliminada correctamente.');
    }
}
