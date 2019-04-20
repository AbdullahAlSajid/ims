<?php

namespace App\Http\Controllers;

use App\Models\DailySell;
use App\Models\User;
use Illuminate\Http\Request;

class DailySellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dailysells = DailySell::all();
        $compact = compact('dailysells');
        return view('sellsmodule.dailyselllist',$compact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::with('roles')->get();
        $compact = compact('users');
        return view('sellsmodule.adddailysell',$compact);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dailysell = DailySell::create([
            'sells_point_name' => $request->sellspoint,
            'price' => $request->price,
            'quantity' => $request->quantity,

        ]);

        return redirect(route('home.sellsmodule.products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DailySell  $dailySell
     * @return \Illuminate\Http\Response
     */
    public function show(DailySell $dailySell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DailySell  $dailySell
     * @return \Illuminate\Http\Response
     */
    public function edit(DailySell $dailySell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DailySell  $dailySell
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DailySell $dailySell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DailySell  $dailySell
     * @return \Illuminate\Http\Response
     */
    public function destroy(DailySell $dailySell)
    {
        //
    }
}
