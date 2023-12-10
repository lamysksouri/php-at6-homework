<fieldset>
    <legend>Liste Appartements</legend>
<table class="table" id="example">
    <thead>
    <tr class="table table-primary">
        <th>Reference</th>
        <th>Proprietaire</th>
        <th>Localite</th>
        <th>Surface</th>
        <th>Usage</th>
        <th>Nb Pieces</th>
        <th>Espace commun</th>
        <th>Action</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($lesAppartements as $key => $app) {
        echo "<tr>
            <td>$app[0]</td>
            <td>$app[1]</td>
            <td>$app[2]</td>
            <td>$app[3]</td>
            <td>$app[5]</td>
            <td>$app[4]</td>
            <td>$app[7]</td>
            
            <td><a href='modifierAppartement.php?ref=$app[0]'>Edit</a></td>
            <td><a href='supprimerAppartement.php?ref=$app[0]'>Supprimer</a></td>
        </tr>";
    }
    ?>
    </tbody>
</table></fieldset>