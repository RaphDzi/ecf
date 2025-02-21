<x-navbar>
    <x-slot:title>
        Gestion des Réservations
    </x-slot:title>
</x-navbar>

<div class="max-w-7xl mx-auto p-4 bg-white shadow-md rounded-lg mt-6">
    <h2 class="text-2xl font-semibold mb-6">Liste des Réservations</h2>
    <x-button href="{{ route('reservations.create') }}" class="text-white bg-indigo-600  hover:bg-indigo-700">
        faire une reservation
    </x-button>
    <!-- Table des réservations -->
    <div class=" mt-5 overflow-x-auto">

        <table class="min-w-full bg-white table-auto border-collapse shadow-md rounded-lg">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th class="px-6 py-3 text-left">date de reservation</th>
                    <th class="px-6 py-3 text-left">Personne qui a réservé</th>
                    <th class="px-6 py-3 text-left">date du cours</th>
                    <th class="px-6 py-3 text-left">nb de places</th>
                    <th class="px-6 py-3 text-left">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-3">{{ $reservation->date_reservation }}</td>
                        <td class="px-6 py-3">{{ $reservation->utilisateurs->nom }} - {{ $reservation->utilisateurs->prenom }}</td>
                        <td class="px-6 py-3">{{ $reservation->creneaux->date_heure }}</td>
                        <td class="px-6 py-3">{{ $reservation->creneaux->places }}</td>
                        <td class="px-6 py-3 flex gap-4">
                            <a href="{{ route('reservations.edit', $reservation->id) }}" class="text-blue-500 hover:text-blue-700">Modifier</a>
                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?')" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $reservations->links() }}
    </div>
</div>
