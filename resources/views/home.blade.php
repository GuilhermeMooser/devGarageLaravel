@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <img src="{{ asset('storage/images/porscheSVG.svg') }}" alt="Imagem" class="w-100 img-fluid mx-auto">
        </div>
    </div>

    <div class="bg-danger p-5">
        <div class="row text-white py-2 mt-4">
            <div class="col-md-6 text-center">
                EXCLUSIVE STOCK
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <input type="text" class="form-control mx-2" placeholder="Search">
                <select name="" id="" class="form-select mx-2">
                    <option value="">Select</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-4 flex flex-col w-auto">
                <div class="border border-2 border-black rounded-3 p-2">
                    <div>
                        TESTE NOME
                    </div>
                    <div class="text-center">
                        <img class="img-fluid rounded-3" src="data:image/jpeg;base64,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" alt="">
                    </div>
                    <div class="d-flex">
                        <div class="col-md-9">
                            NOME DO CARRO
                        </div>
                        <div class="col-md-3">
                            PREÇO
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 flex flex-col w-auto">
                <div class="border border-2 border-black rounded-3 p-2">
                    <div>
                        TESTE NOME
                    </div>
                    <div class="text-center">
                        <img class="img-fluid rounded-3" src="data:image/jpeg;base64,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" alt="">
                    </div>
                    <div class="d-flex">
                        <div class="col-md-9">
                            NOME DO CARRO
                        </div>
                        <div class="col-md-3">
                            PREÇO
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 flex flex-col w-auto">
                <div class="border border-2 border-black rounded-3 p-2">
                    <div>
                        TESTE NOME
                    </div>
                    <div class="text-center">
                        <img class="img-fluid rounded-3" src="data:image/jpeg;base64,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" alt="">
                    </div>
                    <div class="d-flex">
                        <div class="col-md-9">
                            NOME DO CARRO
                        </div>
                        <div class="col-md-3">
                            PREÇO
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
            </div>
        </div>
    </div>
</div>
@endsection