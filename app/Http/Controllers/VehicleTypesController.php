<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\VehicleType;

class VehicleTypesController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicleTypes = VehicleType::all();
        return view('vehicleTypes.index', compact('vehicleTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request->validate([
            'type' => 'required|max:255',
          ]);
          VehicleType::create($request->all());
          return redirect()->route('vehicleTypes.index') 
            ->with('success','Vehicle type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vehicleType = VehicleType::find($id);
        return view('vehicleType.show', compact('vehicleTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'type' => 'required|max:255',
          ]);
          $vehicleType = VehicleType::find($id);
          $vehicleType->update($request->all());
          return redirect()->route('vehicles.index')
          ->with('success', 'Vehicle type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehicleType = VehicleType::find($id);
        $vehicleType->delete();
        return redirect()->route('vehicles.index')
          ->with('success', 'Vehicle type deleted successfully.');
    }

    public function create()
    {
      return view('vehicles.create');
    }

    public function edit($id)
  {
    $vehicleType = VehicleType::find($id);
    return view('Vehicles.edit', compact('vehicleTypes'));
  }
}
