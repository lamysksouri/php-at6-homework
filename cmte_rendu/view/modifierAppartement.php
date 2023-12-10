<fieldset>
    <legend>Modification des donnees d'un appartement</legend>

    <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    <div class="mb-3">
    <label class="form-label">Reference</label>
    <input type="text" class="form-control" id="reference" value="<?=$app[0]?>" name="reference">
  </div>
    <div class="mb-3">
    <label class="form-label">Proprietaire</label>
    <input type="text" class="form-control" id="proprietaire" value="<?=$app[1]?>" name="proprietaire">
  </div>
  <div class="mb-3">
    <label class="form-label">Localite</label>
    <input type="text" class="form-control" id="localite" value="<?=$app[2]?>" name="localite">
  </div>
  <div class="mb-3">
    <label class="form-label">Surface</label>
    <input type="text" class="form-control" id="Surface" value="<?=$app[3]?>" name="surface">
  </div>
  <div class="mb-3">
  <select name="domaineUsage">
        <option value="Bureau">Bureau</option>
        <option value="Domicile">Domicile</option>
</select>
    </div>
  <div class="mb-3">
    <label class="form-label">Nombre de pieces</label>
    <input type="number" class="form-control" id="nbrePieces" value="<?=$app[4]?>" name="nbrePieces">
  </div>
  <div class="mb-3">
    <label class="form-label">Surface de l'espace Commun</label>
    <input type="number" class="form-control" id="surfaceEspaceCommun" value="<?=$app[7]?>" name="surfaceEspaceCommun">
  </div>
  <input type="submit" class="btn btn-primary" name="ok" value="Modifier">
</form>


</fieldset>