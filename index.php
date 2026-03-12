<?php
/*1) Créer un nouveau projet algo-exercice
2) L'initialiser en dépôt git
3) Dans le projet, créer un fichier index.php*/

/*4) Créer une fonction addition qui prend 2 nombres en paramètre, les additionne et retourne le résultat*/
function addition($nbr1, $nbr2){
    $resultat = $nbr1 + $nbr2;
    return $resultat;
}

/*5) Afficher dans un paragraphe <p> "Le Résultat de 2 + 5 est de : " accompagné du résultat de l'addition en utilisant la fonction créée*/
$a = 2;
$b = 5;
echo "<p>Le Résultat de $a + $b est de : ".addition($a,$b)."</p>";


/*6) A l'aide d'une Boucle for, afficher les nombre de 10 à 1. Chaque nombre doit être contenu dans un paragraphe*/
for($i=10; $i>0; $i--){
    echo "<p>$i</p>";
}

/*7) Initialiser une varaible $myTab avec le tableau suivant ["Jeff","Mathieu","Yann","Yoann"]*/
$myTab = ["Jeff","Mathieu","Yann","Yoann"];

/*8) Créer une fonction displayTab() qui prend un tableau en paramètre
9) Au sein de la fonction, afficher avec une boucle le contenu de chaque valeur du tableau au sein d'un paragraphe, si et seulement si l'index du tableau est pair. Pour récupérer la taille d'un tableau, on utilise la fonction sizeof( $tab ) qui retourne un entier numérique*/
function displayTab($tab){
    for($i=0; $i<sizeof($tab); $i++){
        if($i%2 === 0){
            echo "<p>{$tab[$i]}</p>";
        }
    }
}

function displayTab02($tab){
    $paraph = '<p>';
    for($i=0; $i<sizeof($tab); $i++){
        if($i%2 === 0){
            $paraph .= $tab[$i].", ";
        }
    }
    $paraph .= '</p>';
    echo $paraph;
}

/*10) Appeler la fonction en lui passant $myTab*/
displayTab($myTab);
?>