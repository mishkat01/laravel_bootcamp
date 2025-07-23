<?php

namespace App\Http\Controllers;

use App\Models\InputSingleColumn;
use Illuminate\Http\Request;

class SingleColumnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = InputSingleColumn::all();
        return view('input_categories_single.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('input_categories_single.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'type' => $request->type,
            'is_active' => $request->is_active ?? true,
            'image_path' => $request->image_path,
            'available_on' => $request->available_on,
            'available_at' => $request->available_at,
            'available_datetime' => $request->available_datetime,
            'email' => $request->email,
            'url' => $request->url,
            'color' => $request->color,
            'password' => bcrypt($request->password),
        ];

        InputSingleColumn::create(['data' => $data]);

        return redirect()->route('column.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('input_categories_single.show', compact('inputCategory'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
           return view('input_categories_single.edit', compact('inputCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InputSingleColumn $inputCategory)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            // include all other fields as in store method
        ];

        $inputCategory->update(['data' => $data]);

        return redirect()->route('column.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InputSingleColumn $inputCategory)
    {
       $inputCategory->delete();
        return redirect()->route('column.index');
    }
}
