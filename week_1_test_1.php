<?php
$ime = 'Vesna';
$prezime = 'Ninkovic';
$godine=28;
$uzoran_student=false;
$hobi= ['spavanje', 'spaavanje'];

if ($ime=='Vesna') {
    echo 'Vesna';

} else {
    echo 'Nije Vesna';
}

echo '<hr>';

if ($godine==='28') {
    echo 'Jeste isti tip i vrijednost';
} else {
    echo 'Nije isti tip ili nije ista vrijednost';
}

echo '<hr>';

echo "Moj hobi je " . $hobi[0];



?>