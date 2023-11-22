<?php 
$nilai = 88;
if ($nilai > 90) {
    $grade = "A";
} elseif($nilai >80){
    $grade = "B";
} elseif($nilai >70){
    $grade = "c";
} elseif($nilai >60){
    $grade = "d";
} elseif($nilai >50){
    $grade = "tidak lulus";
}
echo "nilai anda = $nilai<br>";
echo "grade = $grade"
?>