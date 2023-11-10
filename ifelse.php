<?php

$nilai = 65;

if ($nilai > 90) {
    $grade = "A";
}  elseif ($nilai > 80) {
    $grade = "B";
} elseif ($nilai > 70) {
    $grade = "B-";
} elseif ($nilai > 60) {
    $grade = "C";
} elseif ($nilai > 50) {
    $grade = "C-";
} else {
    $grade = "D";
}

echo "Nilai Anda : $nilai \n";
echo "Grade ; $grade";

?>