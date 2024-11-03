@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto p-5 bg-black rounded-4">
            <div class="card bg-black">
                @if(isset($vehicle) && $vehicle->photo)
                <img src="{{ $vehicle->photo }}" class="card-img-top img-fluid rounded-2" alt="{{ $vehicle->name }}" style="max-height: 400px; object-fit: cover;">
                @else
                <p>Imagem do veículo não disponível.</p>
                @endif
                <div class="bg-purple-card-id text-white fw-bold letter-spacing-md text-center fs-2 rounded-2 mt-4">
                    {{ $vehicle->name }}
                </div>
                <div class="card-body">
                    <hr class="text-white">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="text-white">Mark:</h5>
                            <p class="text-yellow-color fs-3">{{ $vehicle->mark }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-white">Model:</h5>
                            <p class="text-yellow-color fs-3">{{ $vehicle->model }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-white">Year:</h5>
                            <p class="text-yellow-color fs-3">{{ $vehicle->year }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-white">Type of Vehicle:</h5>
                            <p class="text-yellow-color fs-3">{{ $vehicle->type == 'CAR' ? 'Car' : 'Motorcycle' }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-white">Owner:</h5>
                            <p class="text-danger fs-3">{{ $vehicle->user->name }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="text-white">Characteristics:</h5>
                            <p class="text-yellow-color fs-3 mb-5 text-justify-custom">{{ $vehicle->characteristics }}</p>
                        </div>
                        <div class="col-md-4 d-flex flex-column align-items-start position-absolute bottom-0 end-0 border-custom p-2 rounded-4 w-25">
                            <h5 class="text-white m-0">Price:</h5>
                            <p class="text-danger fs-4 m-0 text-nowrap">R$ {{ number_format($vehicle->price, 2, ',', '.') }}</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex flex-column align-items-end gap-2 mt-4">
                <a href="{{ route('vehicle.index') }}" class="btn btn-success fs-5 w-25">Buy</a>
                <a href="{{ route('vehicle.index') }}" class="btn btn-warning fs-5 w-25">Return to Home</a>
            </div>
            @if(Auth::check() && Auth::id() === $vehicle->user_id)
            <div class="d-flex gap-4">
                <a href="{{ route('vehicle.edit', $vehicle->id) }}" class="btn btn-primary fs-5 w-25">Edit Vehicle</a>
                <form action="{{ route('vehicle.destroy', $vehicle->id) }}" method="POST" class="d-inline w-20">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger fs-5">Delete Vehicle</button>
                </form>
            </div>
            @endif


        </div>
    </div>
</div>

@endsection