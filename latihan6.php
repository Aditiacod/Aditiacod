<?php
$brg1 = "Buku";
$brg2 = "Mouse";
$brg3 = "Flashdisk";
$brg4 = "Pulpen";

$harga1 = 17500;
$harga2 = 30000;
$harga3 = 70000;
$harga4 = 22300;

$jmlbrg1 = 2;
$jmlbrg2 = 5;
$jmlbrg3 = 1;
$jmlbrg4 = 3;

$th1 = $jmlbrg1 * $harga1 ;
$th2 = $jmlbrg2 * $harga2 ;
$th3 = $jmlbrg3 * $harga3 ;
$th4 = $jmlbrg4 * $harga4 ;

$tharga = $th1 + $th2 + $th3 + $th4;
$pot = 5;

$tpot = ($pot * $tharga) / 100;
$tdibayar = $tharga - $pot;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Barang</title>
</head>
<style type="text/css">
    body {
        font-size: 14pt;
        
    }
    table {
        font-size: 25pt;
    }
</style>
<body>
    <center>
        <font face : "comic sans serif" size="5" color="blue">Contoh perhitungan dengan PHP</font>
        <table border="1" cellspacing ="0" cellpadding="3">
            <tr>
                <td colspan="4" align="center" valign="middle">
                    <b>PESANAN ALAT KANTOR</b>
                </td>
            </tr>
            <tr>
                <td><b>Nama Alat</b></td>
                <td><b>Kwantitas</b></td>
                <td><b>Harga_satuan</b></td>
                <td><b>Jumlah_harga</b></td>
            </tr>
            <?php
            //input data
            ?>
            <tr>
                <td align="left"><?php echo $brg1;?></td>
                <td align="right"><?php echo $jmlbrg1;?></td>
                <td align="right"><?php echo $harga1;?></td>
                <td align="right"><?php echo $th1;?></td>
            </tr>
            <tr>
                <td align="left"><?php echo $brg2;?></td>
                <td align="right"><?php echo $jmlbrg2;?></td>
                <td align="right"><?php echo $harga2;?></td>
                <td align="right"><?php echo $th2;?></td>
            </tr>
            <tr>
                <td align="left"><?php echo $brg3;?></td>
                <td align="right"><?php echo $jmlbrg3;?></td>
                <td align="right"><?php echo $harga3;?></td>
                <td align="right"><?php echo $th3;?></td>
            </tr>
            <tr>
                <td align="left"><?php echo $brg4;?></td>
                <td align="right"><?php echo $jmlbrg4;?></td>
                <td align="right"><?php echo $harga4;?></td>
                <td align="right"><?php echo $th4;?></td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    Diskon <?php echo "($tpot)";?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="right">Jumlah harus dibayar</td>
                <td align="right"><?php echo $tdibayar; ?></td>
            </tr>
        </table>
    </center>
        
</body>
</html>