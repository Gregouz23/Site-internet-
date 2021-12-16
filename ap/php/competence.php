<?php
$data=yaml_parse_file('data/competence.yaml');

/*echo "<pre>";
print_r($data);
echo "</pre>";*/

echo "<h1>COMPETENCE</h1>";
foreach($data as $competence){
    echo "<div>";
    echo $competence["type"]. "<br />";
    echo "Le ".$competence["date"]. "<br />";
    echo $competence["descriptif"]. "<br />";
    echo "</div>";
}
