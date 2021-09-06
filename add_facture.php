<?php
require_once('db_connect.php');
include('commun/header.html');
include('commun/scriptsJS/scriptCommun.html');
?>

// AJOUTER UNE FACTURE

<tr>
    <td width="50%" align="right"><label for="client"> Choisir le client : </label></td>
    <td width="50%"><select name="clients" id="clients">
            <option value="<?php echo $donnes['clients'] ?>"></option>
            <option value=#>jprg</option>
        </select></td>
</tr>

<!-- Footer -->
<?php include('commun/footer.html'); ?>

</body>
</html>



