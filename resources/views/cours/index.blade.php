<x-navbar>
    <x-slot:title>
        Accueil
    </x-slot:title>
</x-navbar>

<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold mb-6">liste des cours :</h1>

    <!-- Liste des cours -->
    <div class="space-y-4">
        @foreach ($cours as $cour)
            <div class="p-4 bg-white shadow-lg rounded-md hover:bg-gray-100 transition-colors">
                <a href="{{ route('cours.edit', $cour->id) }}" class="text-xl font-semibold text-indigo-600 hover:text-indigo-800">
                    {{ $cour->nom }}
                </a>
                <p class="text-sm text-gray-500">{{ $cour->description }}</p>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{ $cours->links() }}
    </div>
</div>
