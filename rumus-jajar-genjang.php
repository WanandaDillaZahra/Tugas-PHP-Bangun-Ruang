<form action="rumus-jajar-genjang.php" method="POST">
    <h1> Rumus Luas dan Keliling Jajar Genjang </h1>
    <p>Alas (a) :</p>
    <input type="number" name="a" placeholder="Ex. 5" />
    <p>Tinggi (t) :</p>
    <input type="number" name="t" placeholder="Ex. 5" />
    <p>Sisi Miring (b) :</p>
    <input type="number" name="b" placeholder="Ex. 5" /><br>
    <input type="submit" name="proses" value="Hitung Luas dan Keliling" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $a = $_POST["a"];
        $t = $_POST["t"];
        $b = $_POST["b"];
        $luas = $a * $t;
        $keliling = 2 * ($a + $b);

        echo "Alas : $a <br>";
        echo "Tinggi : $t <br>";
        echo "B : $b <br>";
        echo "Luas Belah Ketupat : $luas <br>";
        echo "Keliling Belah Ketupat : $keliling <br>";
    }
?>