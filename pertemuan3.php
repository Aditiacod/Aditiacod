<html>
    <head>
        <title>Perhitungan Nilai Mahasiswa</title>
    </head>
    <body>
        <h1 style="text-align: center">Perhitungan Nilai Mahasiswa</h1>
        <form method="post" action="">
            <div style="margin-left: 25%">
                
                Nama : </br><input type="text" name="nama" /><br /> <br />
                Nim : </br><input type="text" name="nim" /><br /> <br />
                Matkul : </br><input type="text" name="matakuliah" /><br /> <br />
                Nilai Absen : </br><input type="text" name="nilai_absen" /><br /> <br />
                Nilai UTS : </br><input type="text" name="nilai_uts" /><br /><br />
                Nilai UAS : </br><input type="text" name="nilai_uas" /><br /><br />
                Nilai Tugas : </br><input type="text" name="nilai_tugas" /><br /><br />
                 
                <input type="submit" name="submit" value="Submit" />
            </div>
        </form>
 
        <div style="margin-left: 25%">
            <?php
                if(isset($_POST['submit'])){
                    $nama = $_POST['nama'];    
                    $nim = $_POST['nim'];
                    $matkul = $_POST['matakuliah'];
                    $nilai_absen = $_POST['nilai_absen'];
                    $nilai_uts = $_POST['nilai_uts'];
                    $nilai_uas = $_POST['nilai_uas'];
                    $nilai_tugas = $_POST['nilai_tugas'];
 
                    //rumus perhitungan nilai
                    $nilai_absen = $nilai_absen*0.1;
                    $nilai_uts = $nilai_uts*0.2;
                    $nilai_uas = $nilai_uas*0.4;
                    $nilai_tugas = $nilai_tugas*0.3;
 
                    $hasil = $nilai_absen + $nilai_uts + $nilai_uas + $nilai_tugas;
 
                    if ($hasil>=80) {
                        $grade = "A";
                    } elseif ($hasil>=70) {
                        $grade = "B";
                    } elseif ($hasil>=50) {
                        $grade = "C";
                    } elseif ($hasil>=40) {
                        $grade = "D";
                    } else {
                        $grade = "E";
                    }
 
                    //hasil perhitungan
                   
                    echo "Nilai Absen   : $nilai_absen <br/> ";
                    echo "Nilai UTS : $nilai_uts <br/>";
                    echo "Nilai UAS : $nilai_uas <br/>";
                    echo "Nilai Praktek : $nilai_tugas<br/>";
 
                    echo "Perolehan Nilai Akhir Mahasiswa adalah  <b>$hasil</b> <br/> ";
                    echo "Grade : $grade <br/>";
                }
            
            ?>
        </div>
    </body>
</html>