<?php

namespace App\Http\Controllers;

use App\Http\Model\Producto;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [];
        }

        $products = Producto::all();

        return view('cart', compact('cart', 'products'));
    }

    public function add(Request $request)
    {
        $productId = $request->get('product_id');
        $quantity = $request->get('quantity');

        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [];
        }

        if (!array_key_exists($productId, $cart)) {
            $cart[$productId] = [
                'product_id' => $productId,
                'quantity' => $quantity,
            ];
        } else {
            $cart[$productId]['quantity'] += $quantity;
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function update(Request $request)
    {
        $productId = $request->get('product_id');
        $quantity = $request->get('quantity');

        $cart = session()->get('cart');

        if (array_key_exists($productId, $cart)) {
            $cart[$productId]['quantity'] = $quantity;
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function destroy(Request $request)
    {
        $productId = $request->get('product_id');

        $cart = session()->get('cart');

        if (array_key_exists($productId, $cart)) {
            unset($cart[$productId]);
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }
}
