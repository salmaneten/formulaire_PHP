
<?php
    $array = array("firstname" =>"", "name" =>"", "email"=>"", "phone" =>"","message" =>"", "firstnameError" =>"", "nameError"=>"", "nameError"=>"", "emailError"=>"", "phoneError"=>"", "messageError"=>"","isSuccess"=>false);
    $emailto = "salmanezerradi2@gmail.com";
    

    if($_SERVER["REQUEST_METHOD"] == "POST") // la 1er fois qd l'utilisateur va entrer la methode n'est pas POST ms pour la 2eme fois pour soummettre les données c exactement POST
        {
            $array["firstname"] = verifyInput($_POST["firstname"]);
            $array["name"] = verifyInput($_POST["name"]);
            $array["email"] = verifyInput($_POST["email"]);
            $array["phone"] = verifyInput($_POST["phone"]);
            $array["message"] = verifyInput($_POST["message"]);
            $array["isSuccess"] = true;
            $emailText = "";

            if(empty($array["firstname"]))
            {
                $array["firstnameError"] = "Je veux connaître ton prénom !";
                $array["isSuccess"] = false;
            }
            else
            {
                $emailText .="Firstname: {$array["firstname"]}\n";
            }
            if(empty($array["name"]))
            {
                $array["nameError"] = "Bah!! On veut savoir aussi ton nom!";
                $array["isSuccess"] = false;
            }
            else
            {
                $emailText .="Name: {$array["name"]}\n";
            }
            if(!isEmail($array["email"]))
            {
                $array["emailError"] = "T'essaies de me rouler ? C'est pas un email ça !";
                $array["isSuccess"] = false;
            }
            else
            {
                $emailText.="Email : {$array["email"]}\n";
            }
            if(empty($array["message"]))
            {
                $array["messageError"] = "Qu'est-ce que tu veux me dire ?";
                $array["isSuccess"] = false;
            }
            else
            {
                $emailText.="Message : {$array["message"]}\n";
            }
            if(!isPhone($array["phone"]))
            {
                $array['phoneError'] = "Que des chiffres et des espaces, stp ...";
            }
            else
            {
               $emailText.="Phone : {$array["phone"]}\n";
            }
            if($array["isSuccess"])
            {
                //$sendmail_from = "zerradisalmane2@gmail.com";
                $headers = "From: {$array["firstname"]} {$array["name"]} <{$array["email"]}>\r\nReplay-To: {$array["email"]}";
                mail($emailto, "Un message de votre site", $emailText, $headers);
                $firstname = $name = $email = $phone = $message = "";

            }


            echo json_encode($array);
        }

        function isPhone($var){
            return preg_match("/^[0-9 ]*$/", $var); // cette fnct permet de si le champ rempli de 0 à 9 avec un espace dedans qui est aussi acceptable par le * pour garantir la validation si le champ est vide. 
        }
 

        function isEmail($var){
            return filter_var($var, FILTER_VALIDATE_EMAIL);
        } 

        function verifyInput($var){
            $var = trim($var); // trim une fnct qui permet d'enlever tout les espaces les retours de la ligne dans notre variables
            $var = stripslashes($var); // cette fnct prmet d'enlever tout les anti slash
            $var = htmlspecialchars($var); // cette fnct Convertit les caractères spéciaux en entités HTML

            return $var;
            
        }
         

?>