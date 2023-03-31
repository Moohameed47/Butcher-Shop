<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Carbon;
use Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use session;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('home');
    }
    public function insert(Request $request)
    {
        $request->validate([
            'catname' => 'required',
        ]);
        DB::table('categories')->insert([
            'catname' => $request->catname,
        ]);
        FacadesSession::flash('success');
        return back();
    }
    public function delete(Request $request, $category)
    {
        DB::table('categories')->where('id', $category)->delete();
        return back();
    }
    public function update(Request $request, $category)
    {
        $request->validate([
            'catname' => 'required',
        ]);
        DB::table('categories')->where('id', $category)->update([
            'catname' => $request->catname
        ]);

        FacadesSession::flash('success');
        return back();
    }
}
