<?php
    function generatePassword($lenght){
        $password='';
        for($i=0; $i<$lenght; $i++){
            $password .= chr(rand(35,122));
        }
        return $password;
    }
?>