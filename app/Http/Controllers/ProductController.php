<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Obtener todos los productos
        return view('productos.gestionProduct', compact('products'));
    }
    

    public function create()
    {
        // Mostrar formulario para crear un nuevo producto
        return view('productos.createProduct');
    }

    public function store(Request $request)
    {
        // Validar y guardar un nuevo producto
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Producto creado exitosamente.');
    }

    public function edit(Product $product)
    {
        // Mostrar formulario para editar un producto existente
        return view('productos.editProduct', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        // Validar y actualizar el producto
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy(Product $product)
    {
        // Eliminar el producto
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
