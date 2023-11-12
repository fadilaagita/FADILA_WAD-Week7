<?php

require 'dbconnect.php';

$konser = mysqli_query($conn, "SELECT * FROM daftar_konser");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Daftar Konser</title>
</head>
<body>
    <div class="container">
        <h1>Daftar Konser</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama Konser</th>
                    <th scope="col">Lineup</th>
                    <th scope="col">Event Organizer</th>
                    <th scope="col">Tanggal Konser</th>
                    <th scope="col">Lokasi Konser</th>
                    <th scope="col">Harga Tiket</th>
                    <th scope="col">Contact Person</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($konser)) : ?>
                    <tr>
                        <td><?= $row['nama_konser']; ?></td>
                        <td><?= $row['lineup']; ?></td>
                        <td><?= $row['event_org']; ?></td>
                        <td><?= $row['schedule']; ?></td>
                        <td><?= $row['location']; ?></td>
                        <td><?= $row['ticket_price']; ?></td>
                        <td><?= $row['contact_person']; ?></td>
                        <td>
                            <a href="update.php?id=<?= $row['konser_id']; ?>" class="btn btn-warning">Update</a>
                            <a href="delete.php?id=<?= $row['konser_id']; ?>" class="btn btn-danger" onclick="alert('Anda akan menghapus data ini')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>