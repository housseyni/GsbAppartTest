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
    </div>
@endsection
