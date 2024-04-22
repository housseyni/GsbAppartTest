@extends('layouts.app')

@section('content')
    <div class="max-w-xl mx-auto mt-8 bg-white p-8 rounded shadow-md">
        <h2 class="text-xl font-semibold mb-4">Détails de l'appartement</h2>

        <ul class="list-disc ml-4">
            <li>
                <span class="font-bold">Numéro d'appartement:</span> {{ $appartement->NumAppart }}
            </li>
            <li>
                <span class="font-bold">Rue:</span> {{ $appartement->Rue }}
            </li>
            <li>
                <span class="font-bold">Arrondissement:</span> {{ $appartement->Arrondissement }}
            </li>
            <li>
                <span class="font-bold">Étage:</span> {{ $appartement->Etage }}
            </li>
            <li>
                <span class="font-bold">Type d'appartement:</span> {{ $appartement->TypeAppart }}
            </li>
            <li>
                <span class="font-bold">Prix de location:</span> {{ $appartement->PrixLoc }}
            </li>
            <li>
                <span class="font-bold">Prix des charges:</span> {{ $appartement->PrixCharge }}
            </li>
            <li>
                <span class="font-bold">Ascenseur:</span> {{ $appartement->Ascenseur }}
            </li>
            <li>
                <span class="font-bold">Préavis:</span> {{ $appartement->Preavis }}
            </li>
            <li>
                <span class="font-bold">Date libre:</span> {{ $appartement->DateLibre }}
            </li>
            <!-- Ajoutez ici d'autres détails de l'appartement si nécessaire -->
        </ul>

        @if(Auth::check() && Auth::user()->is_client)
        <div class="grid grid-cols-2 gap-4 mt-4">
            <form action="{{ route('confirmation-location') }}" method="GET">
                @csrf
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:opacity-80 w-full">Louer</button>
            </form>
        
            <form action="{{ route('confirmation-achat') }}" method="GET">
                @csrf
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:opacity-80 w-full">Acheter</button>
            </form>
        </div>
        
        
    </div>
    @endif
@endsection
