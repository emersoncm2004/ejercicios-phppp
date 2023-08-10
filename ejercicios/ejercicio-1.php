<?php
 $nombre= strtolower(readline("Ingrese su nombre usuario \n"));
 $id= intval(readline("Ingrese su identificación \n"));

 if(!empty($nombre) && !empty($id)){

    if($nombre == "Sebastian" && $id == "1234"){
      echo "Hola Sebastian";
     
    }
    elseif($nombre != "Daniela" && $id == "1234"){
        echo "El id coincide, pero el nombre de usuario es incorrecto";
      }
      elseif($nombre == "Tatiana" && $id != "1234"){
        echo "El nombre coincide verifique su identificación";
      }
  
    else{
        echo "Usuario incorrecto";
      }
    }
    else{
        echo "Uno o los dos espacios estan vacíos";
    }
