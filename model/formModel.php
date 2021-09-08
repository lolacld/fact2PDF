<?php

// Classe permettant de gérer des formulaires 

class Form {

    public function input($name)
    {
            if ($name == "password")
                return ("<input type='password' name='" . $name . "'><br />");
            else
                return ("<input type='text' name='" . $name . "'><br />");
    }
    public function input2($mail)
    {
            if ($mail == "password")
                return ("<input type='text' name='" . $mail . "'><br />");
            else
                return ("<input type='text' name='" . $mail . "'><br />");
    }

    public function submit()
    {  
        return ("<button type='submit'>Envoyer</button>");
    }
}

?>
