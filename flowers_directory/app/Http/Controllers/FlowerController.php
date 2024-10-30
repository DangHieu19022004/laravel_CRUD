<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use App\Models\Regions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('flowers.index', ['flowers' => Flower::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $regions = DB::table('regions')->get();
        return view('flowers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image_url' => 'required'
       ]);

       Flower::create($validatedData);

       return redirect()->route('flowers.index')->with('success', 'Flower Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Flower $flower)
    {
        return view('flowers.show', compact('flower'), ['regions' => Regions::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flower $flower)
    {
        $regions = Regions::all();
        return view('flowers.edit',[
            'flowers' => $regions,
            'flower' => $flower
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flower $flower)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image_url' => 'required'
           ]);

           $flower->update($validatedData);

        return redirect()->route(('flowers.index'))->with('success', 'Flower Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flower $flower)
    {
        $flower->delete();
        return redirect()->route('flowers.index')->with('success', 'Student Deleted Successfully');
    }
}
