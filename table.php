<?php
include 'konek.php';

if (isset($_POST["kirim"])) { 
    $mtk = $_POST['mtk'];
    $pjok = $_POST['pjok'];
    $pipas = $_POST['pipas'];
    $indo = $_POST['indo'];
    $nilai = new Nilai($mtk, $pjok, $pipas , $indo);
?>

<!DOCTYPE html>
<html>
<head>
    <center>
    <title>Hasil Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #ECE5C7 ;
        }
        .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f5f5f5;
        margin-top: 70px ;
    }
        table {
            width: 400px;
            margin: 0 auto;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #116A7B;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Hasil Nilai</h1>
    <table>
        <tr>
            <th>Nilai Mata Pelajaran</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <td>Nilai matematika</td>
            <td><?php echo $mtk; ?></td>
        </tr>
        <tr>
            <td>Nilai PJOK</td>
            <td><?php echo $pjok; ?></td>
        </tr>
        <tr>
            <td>Nilai Pipas</td>
            <td><?php echo $pipas; ?></td>
        </tr>
        <tr>
            <td>Nilai Indonesia</td>
            <td><?php echo $indo; ?></td>
        </tr>
        <tr>
            <td>Jumlah Total</td>
            <td><?php echo $nilai->getTotal(); ?></td>
        </tr>
        <tr>
            <td>Rata-Rata</td>
            <td><?php echo $nilai->getAverage(); ?></td>
        </tr>
        <tr>
            <td>Nilai Maksimal</td>
            <td><?php echo $nilai->getMax(); ?></td>
        </tr>
        <tr>
            <td>Nilai Minimal</td>
            <td><?php echo $nilai->getMin(); ?></td>
        </tr>
    </table>
    <br></br>
    <a href="index.php">kembali</a>
    </center>
    </div>
</body>
</html>

<?php
    $db->insertData($mtk, $pjok, $pipas, $indo);
    $db->close();
}
?>