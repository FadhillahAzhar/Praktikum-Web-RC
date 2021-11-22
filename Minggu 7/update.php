<br><br><br>
<form id="form" action="" onsubmit="proses()" method="POST">
        <input class="field" type="text" name="nim" placeholder="NIM"> <br> <br>
        <input class="field" type="text" name="nama" placeholder="Nama"> <br> <br> <br>
        <select class="opt" name="prodi" id="opt" required >
            <option value="" selected disabled hidden>Pilih Program Studi</option>
            <option value="IF">Teknik Informatika</option>
            <option value="EL">Teknik Elektro</option>
            <option value="SI">Teknik Sipil</option>
        </select> <br>
        <input class="field" type="text" name="angkatan" placeholder="Angkatan"> <br> <br> <br>
        <input class="btn" type="submit" value="submit">
    </form>
    
    <script>
        function proses(){
            $.ajax({
                type: "POST",
                url: "prosesupdate.php",
                data: $('#form').serialize(),
            })
        }
    </script>