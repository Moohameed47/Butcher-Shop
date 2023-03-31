<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Carbon;
use Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use session;

class postcontroller extends Controller
{


    public function products()
    {
        $posts = DB::table('products')->get();
        $Cats = DB::table('categories')->get();
        return view('product', compact('posts', 'Cats'));
    }

    public function add()
    {
        return view('Admin');
    }
    public function update(Request $request, $product)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'category' => 'required',
        ]);
        $updates = [
            'title' => $request->title,
            'prize' => $request->price,
            'categories_id' => $request->category,
        ];
        if (!empty($request->image)) {
            $path = $request->image->store('public/images');
            $path = str_replace('public', 'storage', $path);
            $updates = array_merge($updates, [
                'image' => $path,
            ]);
        }
        DB::table('products')->where('id', $product)->update($updates);
        FacadesSession::flash('success');
        return back();
    }
    public function insert(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required',
            'category' => 'required',
        ]);
        $path = $request->image->store('public/images');
        $path = str_replace('public', 'storage', $path);
        DB::table('products')->insert([
            'title' => $request->title,
            'prize' => $request->price,
            'image' => $path,
            'categories_id' => $request->category,
        ]);
        FacadesSession::flash('success');
        return back();
    }
    public function delete(Request $request, $product)
    {
        DB::table('products')->where('id', $product)->delete();
        return back();
    }
}
