<form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Permet de forcer la méthode PUT pour la mise à jour -->

    <div class="form-group">
        <label for="utilisateur_id">Utilisateur</label>
        <input type="text" name="utilisateur_id" value="{{ $reservation->utilisateur_id }}" required>
    </div>

    <div class="form-group">
        <label for="creneau_id">Creneau</label>
        <input type="text" name="creneau_id" value="{{ $reservation->creneau_id }}" required>
    </div>

    <div class="form-group">
        <label for="date_reservation">Date de Réservation</label>
        <input type="date" name="date_reservation" value="{{ $reservation->date_reservation }}" required>
    </div>

    <button type="submit">Mettre à jour</button>
</form>









