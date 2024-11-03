@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <img src="{{ asset('storage/images/FerrariOld.jpg') }}" alt="Imagem" class="img-fluid w-100 h-100">
</div>

<div class="container">
    <div class="row justify-content-center custom-position">
        <div class="col-md-10">
            <div class="bg-black rounded-4">
                <div class="row text-white p-4">
                    <div class="col-md-4 text-center fs-4">
                        EXCLUSIVE STOCK
                    </div>
                    <div class="col-md-8 d-flex justify-content-center align-items-center">
                        <input type="text" class="form-control mx-2" placeholder="Search">
                        <select name="" id="" class="form-select mx-2">
                            <option value="">Select</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    @foreach($vehicles as $vehicle)
                    <div class="col-md-3 rounded-4 m-3 border-item-home">
                        <a href="{{ route('vehicle.show', $vehicle->id) }}" class="text-decoration-none text-dark">
                            <div class="text-center">
                                <div class="rounded-top-4 bg-black text-light p-1 fs-4 fst-italic">
                                    {{ $vehicle->name }}
                                </div>
                                <img class="img-fluid rounded-2" src="{{ $vehicle->photo }}" alt="{{ $vehicle->name }}" style="width: 100%; height: 200px; object-fit: cover;">
                                <div class="d-flex align-items-center p-1">
                                    <div class="col-md-7 text-start fs-5 text-secondary">
                                        {{ Str::limit($vehicle->mark, 10, '...') }}
                                    </div>
                                    <div class="col-md-5 fs-6 bg-danger rounded-2 text-black text-nowrap">
                                        R$ {{ $vehicle->price}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
@endsection