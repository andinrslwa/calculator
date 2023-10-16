<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        <input type="text" name="angka1" placeholder="Angka pertama">
        <input type="text" name="angka2" placeholder="Angka kedua">
        <select name="operator">
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
        </select>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = floatval($_POST['angka1']);
        $angka2 = floatval($_POST['angka2']);
        $operator = $_POST['operator'];
        $hasil = 0;

        switch ($operator) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    echo "Tidak dapat membagi dengan 0.";
                }
                break;
            default:
                echo "Operasi tidak valid.";
                break;
        }

        echo "Hasil: " . $hasil;
    }
    ?>

</body>
</html>