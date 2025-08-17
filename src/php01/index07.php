<?php

function displayResult ($score1, $score2, $score3) {
    $result;
    $total = $score1 + $score2 + $score3;

    if ($total > 210) {
        $result = "合格";
    } else {
        $result = "不合格";
    }

    echo "合計点は".$total."なので".$result."です";
    return;
}

displayResult(100,100,100);
echo "<br />";


function triangle ($base, $height) {
    $area = $base * $height / 2;
    echo "三角形の面積は".$area."です<br/>";
    return;
}

function square ($height, $width) {
    $area = $height * $width;
    echo "四角形の面積は".$area."です<br />";
    return;
}

function trapezoid ($ubase, $lbase, $height) {
    $area = ($ubase + $lbase) * $height / 2;
    echo "台形の面積は".$area."です<br />";
    return;
}

triangle(100, 100);
square(100,100);
trapezoid(10,15,100);