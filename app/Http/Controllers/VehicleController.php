<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicle = Vehicle::all();
        return view('vehicle.index', compact('vehicle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'year' => 'required',
            'model' => 'required',
            'mark' => 'required',
            'characteristics' => 'required',
          ]);
          Vehicle::create($request->all());
          return redirect()->route('vehicle.index') //SCREEN FROM THE VEHICLES
            ->with('success','Vehicle created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicle.show', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'year' => 'required',
            'model' => 'required',
            'mark' => 'required',
            'characteristics' => 'required',
          ]);
          $vehicle = Vehicle::find($id);
          $vehicle->update($request->all());
          return redirect()->route('vehicle.index')
          ->with('success', 'Vehicle updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    $vehicle = Vehicle::find($id);
    $vehicle->delete();
    return redirect()->route('vehicle.index')
      ->with('success', 'Vehicle deleted successfully.');
    }

    public function create()
  {
    return view('vehicle.create');
  }

  public function edit($id)
  {
    $vehicle = Vehicle::find($id);
    return view('Vehicle.edit', compact('vehicle'));
  }
}
