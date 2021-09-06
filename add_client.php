<?php
require_once('db_connect.php');
include('commun/header.html');
include('commun/scriptsJS/scriptCommun.html');
?>

<form action="checklogin.php" method="post">
    <p> Prénom: <input type="text" name="username"></p>
    <p> Nom :
        <input type="text" name="lastname"></p>
    <p> Password:
        <input type="password" name="password"></p>
    <p> Email:
        <input type="text" name="email"></p>
    <p> Address:
        <input type="text" name="address"></br></br></p>
    <p> Téléphone:
        <input type="text" name="telephone"></br></br></p>
    <input type="submit" name="register" value="Créer">
</form>


<!-- Footer -->
<?php include('commun/footer.html'); ?>

</body>
</html>