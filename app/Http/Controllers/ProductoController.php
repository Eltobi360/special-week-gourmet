<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medida;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::paginate(10);
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medidas = Medida::all();
        return view('productos.create', compact('medidas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo_sku' => 'nullable|string|max:50|unique:productos,codigo_sku',
            'descripcion' => 'nullable|string',
            'medida_id' => 'required|exists:medidas,id',
            'stock_actual' => 'required|numeric|min:0',
            'stock_minimo' => 'nullable|numeric|min:0',
            'costo_promedio' => 'nullable|numeric|min:0',
        ]);

        Producto::create($validated);

        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
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
    public function edit(Producto $producto)
    {
        $medidas = Medida::all();
        return view('productos.edit', compact('producto', 'medidas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo_sku' => 'nullable|string|max:50|unique:productos,codigo_sku,' . $producto->id,
            'descripcion' => 'nullable|string',
            'medida_id' => 'required|exists:medidas,id',
            'stock_actual' => 'required|numeric|min:0',
            'stock_minimo' => 'nullable|numeric|min:0',
            'costo_promedio' => 'nullable|numeric|min:0',
        ]);

        $producto->update($validated);

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
