<?php

if ($_POST && isset($_POST['time']) && isset($_POST['damage']) && isset($_POST['armor'])) {
    //1.259-((waktu berlalu/2)*0.001)+((dmg dealt/armor lawan/3) *0.001)
    //

    $a = ((58 - $_POST['time']) / 2) * 0.001;
    $b = ($_POST['damage'] / $_POST['armor']);
    $c = ($b / 3) * 0.001;
    $d = (1.259 - $a) + $c;

    $x = number_format($d, 4);
} else {
    $x = false;
}

echo $x;
