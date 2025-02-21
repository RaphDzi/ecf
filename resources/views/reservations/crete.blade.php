<x-navbar>
    <x-slot:title>Réservation de Cours</x-slot:title>
</x-navbar>

<div class="max-w-7xl mx-auto p-4 bg-white shadow-md rounded-lg mt-6">
    <h2 class="text-2xl font-semibold mb-6">Faire une Réservation</h2>

    <!-- Formulaire de réservation -->
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="cours_id" class="block text-gray-700">Cours</label>
            <select name="cours_id" id="cours_id" class="w-full p-2 border border-gray-300 rounded-md">
                <option value="">Choisir un cours</option>
                @foreach($cours as $coursItem)
                    <option value="{{ $coursItem->id }}">{{ $coursItem->nom }}</option>
                @endforeach
            </select>
            @error('cours_id')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="date_reservation" class="block text-gray-700">Date de Réservation</label>
            <input type="date" name="date_reservation" id="date_reservation" class="w-full p-2 border border-gray-300 rounded-md">
            @error('date_reservation')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Réserver</button>
    </form>
</div>
