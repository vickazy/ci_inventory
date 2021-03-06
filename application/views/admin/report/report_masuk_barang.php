<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
</head>
    <body>
        <h1 style="text-align: center;"> Data Barang Masuk </h1>

        <hr>

        <span> Dicetak oleh : <b><?= $this->session->username; ?></b> </span>
        <span style="float: right"> Dicetak pada: <b><?php $now = new DateTime(); echo $now->format('Y-m-d H:i:s'); ?></b></span>

        <hr>
        <br>

        <table border="1" style="width: 100%; border-collapse: collapse;" cellpadding="10">
            <tr>
                <th>ID Masuk Barang</th>
                <th>Kode Supplier</th>
                <th>Kode Barang</th>
                <th>Tanggal Masuk</th>
                <th>Jumlah Masuk</th>
            </tr>
            <?php foreach($masuk_barang as $row): ?>
            <tr>
                <td><?= $row->id_masuk_barang; ?></td>
                <td><?= $row->kode_supplier; ?></td>
                <td><?= $row->kode_barang; ?></td>
                <td><?= $row->tanggal_masuk; ?></td>
                <td><?= $row->jumlah_masuk; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>    
    </body>
</html>