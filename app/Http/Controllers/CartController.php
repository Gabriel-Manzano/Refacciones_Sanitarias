<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $total = array_reduce($cart, function ($sum, $item) {
            return $sum + $item['price'] * $item['quantity'];
        }, 0);

        return view('carrito', compact('cart', 'total'));
    }

    public function add(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image ?? 'default.jpg', // Si tienes imágenes
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('rutacarrito')->with('success', 'Producto agregado al carrito');
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart', []);
        foreach ($request->quantities as $id => $quantity) {
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] = $quantity;
            }
        }
        session()->put('cart', $cart);
        return redirect()->route('rutacarrito')->with('success', 'Carrito actualizado');
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart', []);
        unset($cart[$request->id]);
        session()->put('cart', $cart);
        return redirect()->route('rutacarrito')->with('success', 'Producto eliminado del carrito');
    }
}
