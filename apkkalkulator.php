
<?php
$hasil = "";
$angka1 = "";
$angka2 = "";
$operator = "+";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = $_POST["angka1"] ?? "";
    $angka2 = $_POST["angka2"] ?? "";
    $operator = $_POST["operator"] ?? "+";

    if (is_numeric($angka1) && is_numeric($angka2)) {
        $a = (float)$angka1;
        $b = (float)$angka2;

        switch ($operator) {
            case "+":
                $hasil = $a + $b;
                break;
            case "-":
                $hasil = $a - $b;
                break;
            case "*":
                $hasil = $a * $b;
                break;
            case "/":
                $hasil = ($b == 0)
                    ? "Tidak bisa dibagi nol"
                    : $a / $b;
                break;
            default:
                $hasil = "Operator tidak valid";
        }
    } else {
        $hasil = "Masukkan angka yang valid";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #141e30, #243b55);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 20px;
        }

        .kalkulator {
            background: white;
            padding: 30px;
            border-radius: 20px;
            width: 100%;
            max-width: 360px;
            box-shadow: 0 10px 30px #0005;
        }

        h2 {
            text-align: center;
            color: #243b55;
        }

        input, select, button {
            width: 100%;
            padding: 13px;
            margin-top: 12px;
            border-radius: 10px;
            font-size: 16px;
        }

        input, select {
            border: 1px solid #ccc;
        }

        button {
            border: none;
            background: #087f8c;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #065e68;
        }

        .hasil {
            margin-top: 20px;
            padding: 15px;
            border-radius: 10px;
            background: #e8f8f5;
            color: #11665c;
            overflow-wrap: anywhere;
        }

        .reset {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #087f8c;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="kalkulator">
        <h2>🧮 Kalkulator PHP</h2>

        <form method="POST">
            <input
                type="number"
                step="any"
                name="angka1"
                placeholder="Masukkan angka pertama"
                value="<?= htmlspecialchars((string)$angka1) ?>"
                required
            >

            <select name="operator">
                <option value="+" <?= $operator == "+" ? "selected" : "" ?>>Penjumlahan (+)</option>
                <option value="-" <?= $operator == "-" ? "selected" : "" ?>>Pengurangan (-)</option>
                <option value="*" <?= $operator == "*" ? "selected" : "" ?>>Perkalian (×)</option>
                <option value="/" <?= $operator == "/" ? "selected" : "" ?>>Pembagian (÷)</option>
            </select>

            <input
                type="number"
                step="any"
                name="angka2"
                placeholder="Masukkan angka kedua"
                value="<?= htmlspecialchars((string)$angka2) ?>"
                required
            >

            <button type="submit">HITUNG</button>
        </form>

        <?php if ($hasil !== ""): ?>
            <div class="hasil">
                <strong>Hasil Perhitungan:</strong>
                <h3><?= htmlspecialchars((string)$hasil) ?></h3>
            </div>
        <?php endif; ?>

        <a class="reset" href="index.php">Reset Kalkulator</a>
    </div>
</body>
</html>
