<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Cart extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function  minus(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);
        $user_id = Auth::user()->id;
        $product_id = $request->id;
        $product = DB::table('cart')->where([
            'product_id' => $product_id,
            'user_id' => $user_id,
        ])->first();
        if ($product) {
            DB::table('cart')->where('id', $product->id)->update([
                'quantity' => (int)$product->quantity - 1
            ]);
        }
    }
    public function  delete(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);
        $user_id = Auth::user()->id;
        $product_id = $request->id;
        DB::table('cart')->where([
            'product_id' => $product_id,
            'user_id' => $user_id,
        ])->delete();
    }
    public function insert(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);
        $user_id = Auth::user()->id;
        $product_id = $request->id;
        $product = DB::table('cart')->where([
            'product_id' => $product_id,
            'user_id' => $user_id,
        ])->first();
        if ($product) {
            DB::table('cart')->where('id', $product->id)->update([
                'quantity' => (int)$product->quantity + 1
            ]);
        } else {
            DB::table('cart')->insert([
                'product_id' => $product_id,
                'user_id' => $user_id,
                'quantity' => 1
            ]);
        }
    }
}
