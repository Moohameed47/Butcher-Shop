<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Checkout extends Controller
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
    public function Checkout(Request $request)
    {

        $request->validate([
            "Number" => "required",
            "state" => "required",
            "first_name" => "required",
            "last_name" => "required",
            "address" => "required",
            "City" => "required",
            "Postal_Code" => "required",
        ]);

        $items = DB::table('cart')->where([
            'user_id' => Auth::user()->id,
        ])->get();

        $total_price = 0;
        $quantity = 0;

        foreach ($items as $item) {
            $product = Product::find($item->product_id);
            $total_price += (int) $item->quantity * (int) $product->prize;
            $quantity += (int) $item->quantity;
        }

        $checkout_id = DB::table('checkout')->insert([
            'number' => $request->Number,
            'country' => $request->state,
            'Fname' => $request->first_name,
            'Lname' => $request->last_name,
            'Appartment' => $request ->address,
            'city' => $request ->City,
            'Government' => '',
            'postal_code' => $request->Postal_Code,
        ]);

        DB::table('orders')->insert([
            'checkout_id' => $checkout_id,
            'users_id' => Auth::user()->id,
            'total_prize' => $total_price,
            'address' => $request->Number,
            'quantity' => $quantity,
        ]);

        DB::table('cart')->where([
            'user_id' => Auth::user()->id,
        ])->delete();
    }
}
