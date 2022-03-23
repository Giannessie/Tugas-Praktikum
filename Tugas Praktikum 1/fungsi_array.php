<?php
$ar_buah = ["p" => "pepaya", "a" => "apel", "m" => "mangga", "j" => "jambu"];
echo "<ol>";
foreach ($ar_buah as $k => $v){
    echo "<li> $k - $v </li>";
}
echo "</ol>";
//  Array sort mengurutkan array dalam urutan menaik
sort ($ar_buah);
echo "<hr/>";
echo "</ol>";
echo "<ol>";
foreach ($ar_buah as $buah => $k){
    echo "<li> $buah - $k </li>";
}
echo "</ol>";

// arsort mengurutkan array assosiatif dalam urutan menurun sesuai dengan nilainya
arsort ($ar_buah);
echo "<hr/>";
echo "<ol>";
foreach ($ar_buah as $buah => $k){
    echo "<li> $buah - $k </li>";
}
echo "</ol>";
echo "<hr>";
?>

<!-- =============================== -->
<?php
$tims = ["Mark", "Nessie", "gian", "Dio"];
array_push($tims);
foreach ($tims as $person){
    echo "$person <br/>";
}
echo "<br>";
?>

<?php
$tims = ["Mark", "Nessie", "gian", "dio"];
array_push($tims, "Mark Lee");
foreach ($tims as $person){
    echo "$person <br/>";
}
echo "<br>";
?>

<?php
$tims = ["Mark", "Nessie", "gian", "dio"];
array_shift($tims);
foreach ($tims as $person){
    echo "<br/> $person";
}
echo "<hr>";
?>

<?php
$tims = ["Mark", "Nessie", "gian", "dio"];
array_unshift($tims, "Jaemin", "Jeno");
foreach ($tims as $person){
    echo "<br/> $person";
}
echo "<hr>";
?>