@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>i Nostri treni</h1>
        <div class="row row-cols-3">
            @foreach ($trains as $train)
                <div class="col p-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Treno dell'azienda: {{ $train->Azienda }}</h5>
                            <p class="card-text">Il treno è partito: {{ $train->Orario_di_partenza }}</p>
                            <p class="card-text">Il treno è partito: {{ $train->Orario_di_arrivo }}</p>
                            <p class="card-text">Ed è diretto: {{ $train->Stazione_di_partenza }}</p>
                            <p class="card-text">Ed è diretto: {{ $train->Stazione_di_arrivo }}</p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
