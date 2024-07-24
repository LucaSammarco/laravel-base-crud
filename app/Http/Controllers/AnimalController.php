<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $animals = Animal::all();

        return view('admin.animals.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $newAnimal = new Animal($data);
        $newAnimal->name = $data['name'];
        $newAnimal->species = $data['species'];
        $newAnimal->age = $data['age'];
        $newAnimal->image_url = $data['image_url'];
        $newAnimal->description = $data['description'];
        // dd($newAnimal);
        $newAnimal->save();

        return redirect()->route('admin.animals.show', $newAnimal);

    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        //

        // $animal = Animal::findOrFail($id);

        return view('admin.animals.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        //

        return view('admin.animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        //
        $data = $request->all();

        $animal->update($data);

        return redirect()->route('admin.animals.show', $animal);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        //
        $animal->delete();

        return redirect()->route('admin.animals.index');
    }

}
