<x-navbar>
    <x-slot:title>
        Détails du Cours
    </x-slot:title>
</x-navbar>

<div class="container mx-auto px-6 py-8">
    <!-- Titre du cours -->
    <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ $cours->nom }}</h2>

    <!-- Description du cours -->
    <p class="text-lg text-gray-700 mb-6">
        {{ $cours->description }}
    </p>


    <!-- Bouton de modification -->
    <div class="mt-8">
        <x-button href="{{ route('cours.edit', $cours->id) }}" class="text-white bg-indigo-600  hover:bg-indigo-700">
            Modifier le cours
        </x-button>
    </div>

    <!-- Lien de retour à la liste des cours -->
    <div class="mt-6">
        <a href="{{ route('home') }}" class="text-indigo-600 hover:text-indigo-800">
            Retour à la liste des cours
        </a>
    </div>
</div>
