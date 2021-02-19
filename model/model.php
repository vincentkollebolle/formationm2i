<?php

function connectDB() {
    $pdo = new PDO('mysql:host=localhost;dbname=m2i', "m2i", "m2i");
    return $pdo;
}

function getAllPost() {
    //remplir ce tableau à partir de la bdd 
    $pdo = connectDB();
    $sql = "SELECT * FROM post;";
    $result = $pdo->query($sql);
    $posts = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) { 
        $posts[] = $row;
    } 

    return $posts;
}

function getPostById($id) {
     //remplir ce tableau à partir de la bdd 
     $pdo = connectDB();
     $query = 'SELECT * FROM post WHERE id=:id;';
     $statement = $pdo->prepare($query);
     $statement->bindValue(':id', $id, PDO::PARAM_INT);
     $statement->execute();
     $post = $statement->fetch(PDO::FETCH_ASSOC);
     return $post;
}