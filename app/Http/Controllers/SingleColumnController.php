<?php

namespace App\Http\Controllers;

use App\Models\InputSingleColumn;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('categories'), $imageName);
        }
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'type' => $request->type,
            'is_active' => $request->is_active ?? true,
            'image' => $imageName,
            'available_on' => $request->available_on,
            'available_at' => $request->available_at,
            'available_datetime' => $request->available_datetime,
            'email' => $request->email,
            'url' => $request->url,
            'color' => $request->color,
            'password' => bcrypt($request->password),
        ];
        // dd((object)$data);

        InputSingleColumn::create(['value' => $data]);

        return redirect()->route('column.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(InputSingleColumn $column)
    {
        // dd($column);
        return view('input_categories_single.show', compact('column'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InputSingleColumn $column)
    {
        // dd($column);
        return view('input_categories_single.edit', compact('column'));
    }           

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InputSingleColumn $column)
    {
            // dd($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('categories'), $imageName);
        }
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'type' => $request->type,
            'is_active' => $request->is_active ?? true,
            'image' => $imageName,
            'available_on' => $request->available_on,
            'available_at' => $request->available_at,
            'available_datetime' => $request->available_datetime,
            'email' => $request->email,
            'url' => $request->url,
            'color' => $request->color,
            'password' => bcrypt($request->password),
        ];
           

        $column->update(['value' => $data]);

        return redirect()->route('column.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InputSingleColumn $column)
    {

        $column->delete();
        return redirect()->route('column.index');
    }
}
