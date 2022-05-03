<!--
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
//  Passare come parametri GET name, mail e age 
    $name = $_GET["name"];

    $email = $_GET["email"];

    // $age = $_GET["age"];

//  verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri 
// che mail contenga un punto e una chiocciola e che age sia un numero.

  if(strlen($name) > 3 || strpos($email, '@') && strpos($email, '.')){
    echo ("Accesso Riuscito");
  }else{
    echo ("Accesso Negato");
  }


?>