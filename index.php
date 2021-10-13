<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; 

echo "If the weapon of opponent is " . $opponentWeapon;

    if ($opponentWeapon === $weapons[0]){
    $indyWeapons = $weapons[2];
} elseif ($opponentWeapon === $weapons[1]){
    $indyWeapons = $weapons[0];
} else{
    $indyWeapons = $weapons[1];
}
echo " ,then the weapon of Indiana is " . $indyWeapons . PHP_EOL;

?>