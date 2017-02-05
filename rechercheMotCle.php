<?php

// recuperation des mots-clés
$queried = mysqli_real_escape_string($_POST['motcle']);
$values = explode(',', $queried);

// requete dans la base de donnees
$sql = "SELECT P.Url FROM links WHERE";
$i = 0;
foreach($values as $v) {
    $v = trim($v);
    if($i == 0) {
        $sql .= " name LIKE '%$v%'";
    } else {
        $sql .= " OR name LIKE '%$v%'";
    }
$i++;
}

$search = mysql_query($sql);
while($searche = mysql_fetch_array($search)){
    echo "".$searche['link']."</br>".$searche['name']."</br>".$searche['size']."</br>".$searche['category']."<hr></br></br>";

    } 
