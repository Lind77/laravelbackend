<?php

namespace App\Http\Controllers;

use App\Models\Dishes;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function searchByWord(string $word)
    {
        $dishes = Dishes::where('nombre', 'like', '%' . $word . '%')->with(['inputs', 'base'])->take(10)->get();

        return response()->json($dishes);
    }
}
