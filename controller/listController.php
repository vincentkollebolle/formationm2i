<?php


//2. si besoin demander des données au modele
    //cad récupérer tout les posts présents dans la bdd
    $posts = getAllPost();

 //3. redirigé vers la bonne vue ! 
    require("view/listView.php");
    
