<!-- ma_vue.blade.php -->



@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            @foreach ($appartements as $appartement)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="/img/{{ $appartement->image_path }}" alt="{{ $appartement->nom }}" class="w-full h-48 object-cover mb-4 aspect-ratio">
                    <h2 class="text-xl font-semibold mb-2">Numéro d'appartement: {{ $appartement->NumAppart }}</h2>
                    <p class="text-gray-600">Rue: {{ $appartement->Rue }}</p>
                    <p class="text-gray-600">Arrondissement: {{ $appartement->Arrondissement }}</p>

                    <form action="{{ route('appartements.show', $appartement->NumAppart) }}" method="GET">
                        @csrf
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:opacity-80">Voir les détails</button>
                    </form>
                    <!-- Ajoutez ici d'autres détails de l'appartement -->
                </div>
            @endforeach
        </div>
    </div>
@endsection
