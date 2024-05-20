<?php
$url = 'https://cat-fact.herokuapp.com/facts/';
$json = file_get_contents($url);
$i = 1;
if ($json === FALSE) {
    die('No cat facts for today');
}
$data = json_decode($json);

if ($data === NULL) {
    die('No cat facts for today');
}
echo "TODAY'S CAT FACTS \n\n";
foreach ($data as $value){
    echo "Fact Nr.".$i++. "- $value->text \n\n";
}
