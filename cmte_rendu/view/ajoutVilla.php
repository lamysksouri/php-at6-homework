<form method="post" action="../controller/ajoutVilla.php">
    <fieldset>
        <legend>Ajout villa</legend>
        <div class="mb-3">
    <label class="form-label">Proprietaire</label>
    <input type="text" class="form-control" id="proprietaire" placeholder="proprietaire" name="proprietaire">
  </div>
  <div class="mb-3">
    <label class="form-label">Localite</label>
    <input type="text" class="form-control" id="localite" placeholder="localite" name="localite">
  </div>
  <div class="mb-3">
    <label class="form-label">Surface</label>
    <input type="text" class="form-control" id="Surface" placeholder="surface" name="surface">
  </div>
  <div class="mb-3">
  <select name="domaineUsage">
        <option value="Bureau">Bureau</option>
        <option value="Domicile">Domicile</option>
</select>
     </div>
  <div class="mb-3">
    <label class="form-label">Nombre de pieces</label>
    <input type="number" class="form-control" id="nbrePieces" placeholder="nbrePieces" name="nbrePieces">
  </div>
  <div class="mb-3">
    <label class="form-label">Nombre etages</label>
    <input type="number" class="form-control" id="nbEtage" name="nbEtage">
  </div>
  <input type="submit" class="btn btn-primary" name="ok" value="Ajouter">
    </fieldset>
</form>