<?php
/*****************************************/
/********** Conditions Simples ***********/
/*****************************************/
//### Exemple ###//
echo "CONDITIONS SIMPLES <br><br>";

$animal = "Chat";
// La condition doit répondre à la question:
echo "1.Est-ce un chat : ";

if($animal == "Chat") {
  //condition vraie
  echo "Oui";
}
else {
  //condition fausse
  echo "Non";
}
echo "<br><br>";


/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/
// Écrire la condition qui affiche "Non" quand $chat vaut "Chien" et affiche "Oui" quand $chat vaut "Chat" ###//
$chat = "Chien";
echo "2.Est-ce un chat : ";

// TODO mettre votre code ici

if ($chat === "Chien") {
    echo "Non";
} elseif ($chat === "Chat") {
    echo "Oui";
}

echo "<br><br>";

//----------------------------------------
// Écrire la condition qui affiche "Oui" quand $chat vaut true et affiche "Non" dans le cas contraire ###//
$chat = true;
echo "3.Est-ce un chat : ";

// TODO mettre votre code ici

if ($chat) {
    echo "Oui";
} else {
    echo "Non";
}

echo "<br><br>";