<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $computers = Computer::all();
        return response()->json(['status' => 'success', 'data' => $computers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $computers = Computer::create($request->all());
            return response()->json(['status' => 'success', 
            'message' => 'Computadora creada exitosamente', 
            'data' => $computers]);
        }catch(\Exception $e){
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            $computers = Computer::findOrFail($id);
            return response()-> json(['status' => 'success',
            'data' => $computers]);

        }catch(\Exception $e) {
            return response() -> json(['status' => 'error', 'message' => $e -> getMessage()]);
        }
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
}
