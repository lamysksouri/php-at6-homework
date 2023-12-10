<fieldset>
    <legend>Liste Villa</legend>
<table class="table" id="example">
    <thead>
    <tr class="table table-primary">
        <th>Reference</th>
        <th>Proprietaire</th>
        <th>Localite</th>
        <th>Surface</th>
        <th>Usage</th>
        <th>Nb Pieces</th>
        <th>Nb Etages</th>
        <th>Action</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($Villa as $key => $v) {
        echo "<tr>
            <td>$v[0]</td>
            <td>$v[1]</td>
            <td>$v[2]</td>
            <td>$v[3]</td>
            <td>$v[5]</td>
            <td>$v[4]</td>
            <td>$v[8]</td>
            
            <td><a href='modifiervilla.php?ref=$v[0]'>Edit</a></td>
            <td><a href='supprimervilla.php?ref=$v[0]'>Supprimer</a></td>
        </tr>";
    }
    ?>
    </tbody>
</table></fieldset>