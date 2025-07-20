<?php

namespace App\Http\Controllers;

use App\Models\InputCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InputCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = InputCategory::get();
        return view('input-category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('input-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'quantity' => 'nullable|integer',
            'type' => 'required|in:Physical,Digital',
            'is_active' => 'nullable',
            'image' => 'nullable|image',
            'available_on' => 'nullable|date',
            'available_at' => 'nullable|date_format:H:i',
            'available_datetime' => 'nullable|date',
            'email' => 'nullable|email',
            'url' => 'nullable|url',
            'color' => 'nullable|string',
            'password' => 'nullable|string',
        ]);

         if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('categories'), $imageName);
            $validated['image_path'] = $imageName;
        }

        $validated['is_active'] = $request->has('is_active');
        InputCategory::create($validated);

        return redirect()->route('categories.index')->with('success', 'Created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
}
