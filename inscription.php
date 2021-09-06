<?php
include('model/database.php'); 
?>

<html>
    
    <style>
        #container{
    width:100;
    margin:0 auto;
    margin-top:10%;
    padding: auto;
}
/* Bordered form */
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: blue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #53af57;
    border: 1px solid #53af57;
}

</style>

 
<body>
     <form method="post" action="verification.php">
        <table>
             <tr>
                 <td>
                     <label for="name"> Nom :</label>
                     <input type="text" name="user_name" placeholder="votre nom">
                </td>
                </tr>
                <tr>
                    <td>
                        <label for="mail">Adresse e-mail : </label>
                        <input type="text" name="mail" placeholder="votre mail">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mail2">Veuillez reconfirmez votre adresse mail</label>
                        <input type="text" name="mail2" placeholder="confirmation du mail">
                    </td>
                </tr>
                <tr>
                        <td>
                            <label for="mdp">Mot de passe : </label>
                            <input type="text" name="mdp" placeholder="Mot de passe">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mail2">Veuillez reconfirmez le mot de passe </label>
                            <input type="text" name="mdp2" placeholder="votre mail">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="forminscription" value="Je m\'inscris">
                        </td>
                    </tr> 
                </table> 
            </form>
        </body>
    </html>