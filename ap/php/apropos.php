<?php
$data=yaml_parse_file('data/apropos.yaml');

/*echo "<pre>";
print_r($data);
echo "</pre>";*/

echo "<h1>A PROPOS</h1>";
foreach($data as $apropos){
    echo "<div>";
    echo $apropos["information"]. "<br />";
    echo "</div>";

}

echo "<div id='photo'>";
echo "<img src='image/gendarme.jpg'class='gendarme'>";
echo "</div>";
