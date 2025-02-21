<x-navbar>
    <x-slot:title>
        Modifier le Cours
    </x-slot:title>
</x-navbar>

<div class="max-w-2xl mx-auto p-4 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-semibold mb-4">Modifier le cours : {{ $cours->nom }}</h2>

    <form action="{{ route('cours.update', $cours->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Champ Nom -->
        <div class="mb-4">
            <label for="nom" class="block text-sm font-medium text-gray-700">Nom du cours</label>
            <input type="text" name="nom" id="nom" value="{{ old('nom', $cours->nom) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <!-- Champ Description -->
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('description', $cours->description) }}</textarea>
        </div>

        <!-- Bouton Soumettre -->
        <div class="mt-6 flex items-center justify-end gap-x-6">

            <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
            <a class="text-sm/6 font-semibold text-gray-900" href="/cours/{{$cours->id}}">Cancel</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
    <form method="POST" action="/cours/{{$cours->id}}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
    </form>
</div>
