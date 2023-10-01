<?php
$nombre = rand(1, 100); 

while ($nombre % 2 !== 0) {
    $nombre = rand(1, 100); 
}

echo "Le premier entier pair obtenu par tirage aléatoire est : $nombre";
?>
