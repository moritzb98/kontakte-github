

<form action="{{route('kontakt.store')}}" method="post">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputLastName">Nachname</label>
      <input type="text" class="form-control" id="inputLastName" placeholder="Lastname" name="lastname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputFirstName">Vorname</label>
      <input type="text" class="form-control" id="inputFirstName" placeholder="Firstname" name="firstname">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-10">
        <label for="inputAddress">Straße</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Hauptstraße" name="address">
    </div>
    <div class="form-group col-md-2">
        <label for="inputHousenumber">Hausnummer</label>
        <input type="text" class="form-control" id="inputHousenumber" placeholder="25/2" name="housenumber">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputPLZ">PLZ</label>
      <input type="text" class="form-control" id="inputPLZ" placeholder="PLZ" name="plz">
    </div>
    <div class="form-group col-md-5">
      <label for="inputCity">Stadt</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Stadt" name="stadt">
    </div>
    <div class="form-group col-md-5">
      <label for="inputNumber">Telefonnummer</label>
      <input type="tel" class="form-control" id="inputNumber" placeholder="Telefon" name="tel">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Fertig</button>
</form>