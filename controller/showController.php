<?php
 //1. se mettre en liens avec le modele
    require("../model/model.php");

//2. si besoin demander des données au modele
    //cad récupérer tout les posts présents dans la bdd
    $id=filter_var($_GET["id"], FILTER_VALIDATE_INT); 
    
    $post = getPostById($id); //NTU !!!!!!

 //3. redirigé vers la bonne vue ! 
    require("../view/showView.php");
    