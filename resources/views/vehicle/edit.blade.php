@extends('layouts.app')

@section('content')

<div class="container my-5">
  <div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="col-12 col-md-10 col-lg-8 text-light">
        <h3 class="h1 text-yellow-color">Edit Vehicle</h3>
        <form action="{{ route('vehicle.update', $vehicle->id) }}" method="post" class="border-custom p-5 rounded bg-black">
          @csrf
          @method('PUT')
          <div class="row mb-3">
            <div class="form-group col-12 col-md-6">
              <label for="name" class="text-yellow-color">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $vehicle->name }}" required>
            </div>
            <div class="form-group col-12 col-md-3">
              <label for="model" class="text-yellow-color">Model</label>
              <input class="form-control" id="model" name="model" rows="3" value="{{ $vehicle->model }}" required></input>
            </div>
            <div class="form-group col-12 col-md-3">
              <label for="year" class="text-yellow-color">Year</label>
              <input class="form-control" id="year" name="year" rows="3" value="{{ $vehicle->year }}" required type=" number"></input>
            </div>
          </div>

          <div class="row mb-3">
            <div class="form-group col-12 col-md-3">
              <label for="mark" class="text-yellow-color">Mark</label>
              <input type="text" class="form-control" id="mark" name="mark" value="{{ $vehicle->mark }}" required>
            </div>
            <div class="form-group col-12 col-md-3">
              <label for="photo" class="text-yellow-color">Photo</label>
              <input class="form-control" id="photo" name="photo" rows="3" value="{{ $vehicle->photo }}" required></input>
            </div>
            <div class="form-group col-12 col-md-6">
              <label for="characteristics" class="text-yellow-color">Characteristics</label>
              <input class="form-control" id="characteristics" name="characteristics" rows="3" value="{{ $vehicle->characteristics }}" required max="500"></input>
            </div>
          </div>

          <div class="row mb-3">
            <div class="form-group col-12 col-md-4">
              <label for="type" class="text-yellow-color">Type</label>
              <select id="type" name="type" required class="form-select">
                <option value="CAR" {{ $vehicle->type === 'CAR' ? 'selected' : '' }}>Car</option>
                <option value="MOTORCYCLE" {{ $vehicle->type === 'MOTORCYCLE' ? 'selected' : '' }}>Motorcycle</option>
              </select>
            </div>

            <div class="form-group col-12 col-md-4">
              <label for="price" class="text-yellow-color">Price</label>
              <input class="form-control" id="price" name="price" rows="3" value="{{ $vehicle->price }}" type="number" required></input>
            </div>
          </div>
          <button type="submit" class="btn mt-3 btn-primary">Update Vehicle</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection