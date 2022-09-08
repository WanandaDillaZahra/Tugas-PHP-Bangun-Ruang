<form action="rumus-lingkaran.php" method="POST">
    <h1> Rumus Luas Lingkaran</h1>
    <p>Jari - Jari :</p>
    <input type="number" name="Jari" placeholder="Ex. 5" /><br>
    <input type="submit" name="proses" value="Hitung Luas Lingkaran" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $jari = $_POST["Jari"];
        $pi = 22/7;
        $luas = $pi * $jari * $jari;
        $keliling = 2 * 22/7 * $jari;
        

        echo "Jari Jari : $jari <br>";
        echo "Luas : $luas <br>";
        echo "Keliling : $keliling <br>";
    }
?>