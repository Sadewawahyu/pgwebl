<?php

namespace App\Http\Controllers;

use App\Models\PointsModel;
use Illuminate\Http\Request;

class PointController extends Controller
{
    public function __construct()
    {
        $this->point = new PointsModel();
    }

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $data = [
            'title' => 'Map',
        ];

        return view('map', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. nambah data baru. debug and die
     */
    public function store(Request $request)
    {
        // Validation request
        $request->validate([
            'name' => 'required|unique:point,name',
            'description' => 'required',
            'geom_point' => 'required',
        ],
        [
            'name.required' => 'Name is required',
            'name.unique' => 'Name already exists',
            'description.required' => 'Description is required',
            'geom_point.required' => 'Geometry point is required',
        ]
        );

        $data = [
            'geom' => $request->geom_point,
            'name' => $request->name,
            'description' => $request->description,
        ];


        // Create data
        if (!$this->point->create($data)) {
            return redirect()->route('map')->with('error', 'Point failed to added');
        }

        // Redirect to map
        return redirect()->route('map')->with('success', 'Point has been added');
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
