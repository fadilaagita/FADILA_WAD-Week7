<?php

require 'dbconnect.php';

if (isset($_POST['submit'])) {
    $namakonser = $_POST['namakonser'];
    $lineup = $_POST['lineup'];
    $eventorg = $_POST['eventorg'];
    $schedule = $_POST['schedule'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO daftar_konser (nama_konser, lineup, event_org, schedule, location, ticket_price, contact_person) VALUES ('$namakonser', '$lineup', '$eventorg', '$schedule', '$location', '$price', '$contact')";
    $query = mysqli_query($conn, $sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
    

    </style>
    <title>Input Daftar Konser</title>
</head>
<body>
    <h1>Input Konser</h1>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="namakonser" class="form-label">Nama Konser</label>
                <input type="text" class="form-control" id="namakonser" name="namakonser">
            </div>
            <div class="mb-3">
                <label for="lineup" class="form-label">Lineup</label>
                <input type="text" class="form-control" id="lineup" name="lineup">
            </div>
            <div class="mb-3">
                <label for="eventorg" class="form-label">Event Organizer</label>
                <input type="text" class="form-control" id="eventorg" name="eventorg">
            </div>
            <div class="mb-3">
                <label for="schedule" class="form-label">Tanggal Konser</label>
                <input type="date" class="form-control" id="schedule" name="schedule">
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Lokasi Konser</label>
                <input type="text" class="form-control" id="location" name="location">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga Tiket</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact Person</label>
                <input type="text" class="form-control" id="contact" name="contact">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" id="submit" name="submit">
            </div>
        </form>
    </div>
    <div class="container">
        <?php if(isset($_POST['submit'])) : ?>
            <?php if( $query ) : ?>
                <div class="alert alert-success" role="alert">
                    Konser berhasil ditambahkan!
                </div>
            <?php else : ?>
                <div class="alert alert-danger" role="alert">
                    Konser gagal ditambahkan!
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="container">
        <a href="index.php" class="btn btn-primary">Kembali ke Daftar Konser</a>
    </div>
</body>
</html>