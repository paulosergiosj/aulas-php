<?php

function valida_campo($usuario){
    if(strlen($usuario) < 1 OR strlen($usuario)>10){
        return false;
    }
    else{
        return true;
    }
    
}


?>