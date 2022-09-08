<form action="rumus-balok.php" method="POST">
    <h1> Rumus Volume Balok </h1>
    <p>Panjang Balok (p) :</p>
    <input type="number" name="panjang" placeholder="Panjang" /><br>
    <p>Lebar Balok (l) :</p>
    <input type="number" name="lebar" placeholder="Lebar" /><br>
    <p>Tinggi Balok (t) :</p>
    <input type="number" name="tinggi" placeholder="Tinggi" /><br>
    <input type="submit" name="proses" value="Hitung Volume" />
</form>

<?php
    if ( isset($_POST["proses"]) ) {
        echo "<hr>";
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $tinggi = $_POST["tinggi"];
        $volume = $panjang * $lebar * $tinggi;

        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Volume : $volume <br>";
    }
?>
