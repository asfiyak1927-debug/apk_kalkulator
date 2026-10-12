
<?php
echo "=== KALKULATOR PHP ===\n";

$angka1 = 10;
$angka2 = 5;
$operator = "+";

switch ($operator) {
    case "+":
        $hasil = $angka1 + $angka2;
        break;

    case "-":
        $hasil = $angka1 - $angka2;
        break;

    case "*":
        $hasil = $angka1 * $angka2;
        break;

    case "/":
        $hasil = ($angka2 != 0)
            ? $angka1 / $angka2
            : "Tidak bisa dibagi nol";
        break;

    default:
        $hasil = "Operator tidak dikenal";
}

echo "\nAngka pertama : $angka1";
echo "\nOperator      : $operator";
echo "\nAngka kedua   : $angka2";
echo "\nHasil         : $hasil";
?>
<?php
echo "=== KALKULATOR PHP ===\n";

$angka1 = 10;
$angka2 = 5;
$operator = "+";

switch ($operator) {
    case "+":
        $hasil = $angka1 + $angka2;
        break;

    case "-":
        $hasil = $angka1 - $angka2;
        break;

    case "*":
        $hasil = $angka1 * $angka2;
        break;

    case "/":
        $hasil = ($angka2 != 0)
            ? $angka1 / $angka2
            : "Tidak bisa dibagi nol";
        break;

    default:
        $hasil = "Operator tidak dikenal";
}

echo "\nAngka pertama : $angka1";
echo "\nOperator      : $operator";
echo "\nAngka kedua   : $angka2";
echo "\nHasil         : $hasil";
?>
