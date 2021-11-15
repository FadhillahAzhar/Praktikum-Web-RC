<?php
    class buah{

        function __construct($buah,$harga,$jumlah){
            $this->buah = $buah;
            $this->harga = $harga;
            $this->jumlah = $jumlah;
        }

        function harga(){
            return $this->harga;
        }

        function jumlah(){
            return $this->jumlah;
        }

        function total(){
            return $this->harga * $this->jumlah;
        }

    }

    class belanja{


        private $total = array();
        public function setTotal($harga){
            return array_push($this->total,$harga);
        }

        public function total(){
            return array_sum($this->total);
        }
    }

    if(isset($_POST['submit'])){
        $bayar = new belanja;
        $mangga= new buah("Mangga",15000,$_POST['mangga']);
        $bayar->setTotal($mangga->total());

        $jambu= new buah("Jambu",13000,$_POST['jambu']);
        $bayar->setTotal($jambu->total());

        $salak= new buah("Salak",10000,$_POST['salak']);
        $bayar->setTotal($salak->total());
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Praktikum Minggu 6</title>
</head>
<body>
    <header>
        <a class="logo" href="index.html"><img src="assets/itera.png" alt="Logo"
            width="50px">
        </a>
        <nav class="navbar">
            <div class="link">
                <li><a href="">Home</a></li>
                <li><a href="https://www.youtube.com/watch?v=QtBDL8EiNZo" target="blank">Contact</a></li>
                <li><a href="https://www.youtube.com/watch?v=QtBDL8EiNZo" target="blank">About</a></li>
            </div>
            
        </nav>
    </header>
    <br><br><br>
    
    <form method="POST">
        <table border="1">
            <tr>
                <td>Buah</td>
                <td>Harga / Kg</td>
                <td>Beli Berapa kg bang</td>
            </tr>
            <tr>
                <td>Mangga</td>
                <td>Rp 15.000</td>
                <td><input id="mangga" type="number" name="mangga" value="0" min="0" required></td>
            </tr>
            <tr>
                <td>Jambu</td>
                <td>Rp 13.000</td>
                <td><input id="jambu" type="number" name="jambu" value="0" min="0" required></td>
            </tr>
            <tr>
                <td>Salak</td>
                <td>Rp 10.000</td>
                <td><input id="salak" type="number" name="salak" value="0" min="0" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">submit</button></td>
            </tr>
        </table>
    </form>
    <br> <br>
    <?php if(isset($_POST['submit'])){  ?>
        <div class="hasil">
            <table border="1">
                <tr>
                    <td colspan="3">Total Belanjaan</td>
                </tr>
                <tr>
                    <td>Buah</td>
                    <td>Jumlah</td>
                    <td>Total Harga</td>
                </tr>
                <tr>
                    <td>Mangga</td>
                    <td id="jumlahMangga"><?php echo $mangga->jumlah(); ?></td>
                    <td id="totalMangga"><?php echo $mangga->total(); ?></td>
                </tr>
                <tr>
                    <td>Jambu</td>
                    <td id="jumlahJambu"><?php echo $jambu->jumlah(); ?></td>
                    <td id="totalJambu"><?php echo $jambu->total(); ?></td>
                </tr>
                <tr>
                    <td>Salak</td>
                    <td id="jumlahSalak"><?php echo $salak->jumlah(); ?></td>
                    <td id="totalSalak"><?php echo $salak->total(); ?></td>
                </tr>
                <tr>
                    <td colspan="3">Total Harga : <?php echo $bayar->total(); ?></td>
                </tr>
            </table>
        </div>
    <?php } ?>
    <footer> 
        <center>Fadhillah Azhar Alsani 119140217 © 2021 <br>
        INSTITUT TEKNOLOGI SUMATERA
        </center> 
    </footer>
</body>
</html>