<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo ('css/style.css'); ?>">
</head>
<body>
    <h1>Admin Dashboard</h1>

    <h2>Data Moda Transportasi</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($moda_transportasi as $moda): ?>
            <tr>
                <td><?php echo $moda->id_moda; ?></td>
                <td><?php echo $moda->nama_moda; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Data Rute</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Asal</th>
                <th>Tujuan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($rute as $r): ?>
            <tr>
                <td><?php echo $r->id_rute; ?></td>
                <td><?php echo $r->asal; ?></td>
                <td><?php echo $r->tujuan; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Data Jadwal Keberangkatan</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Jadwal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($jadwal_keberangkatan as $jadwal): ?>
            <tr>
                <td><?php echo $jadwal->id_jadwal; ?></td>
                <td><?php echo $jadwal->jadwal; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Total Penumpang</h2>
    <table>
        <thead>
            <tr>
                <th>Rute</th>
                <th>Total Penumpang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($total_penumpang as $tp): ?>
            <tr>
                <td><?php echo $tp->asal.' - '.$tp->tujuan; ?></td>
                <td><?php echo $tp->total_penumpang; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
