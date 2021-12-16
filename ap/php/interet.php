<?php
$data=yaml_parse_file('data/interet.yaml');

/*echo "<pre>";
print_r($data);
echo "</pre>";*/

echo "<h1> CENTRE D'INTERET</h1>";
foreach($data as $interet){
    echo "<div>";
    echo $interet["sport"]. "<br />";
    echo $interet["musique"]. "<br />";
    echo $interet["jeux"]. "<br />";
    echo "</div>";
}
echo "<div id='photo'>";
echo "<img src='image/velo.jpg'class='velo'>";
echo "<img src='image/hand.jpg'class='hand'>";
echo "</div>";
