<?php
$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

/*foreach($departements as $cle => $valeur){
    foreach($cle as $name){
        echo $valeur."<br>";}
        echo $name;}
*/

foreach($departements as $cle =>$valeur){
    echo $valeur. "<br>";}




































/*foreach( $departements as $key => $value )
{
echo $key .count($departements[$key]). ': <br>';

foreach( $value as $valeur )
echo ' ' . $valeur . '<br>';

echo '<br>';
}*/
?>