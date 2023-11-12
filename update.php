<?php

require 'dbconnect.php';

$id = $_GET['id'];
$konser = mysqli_query($conn, "SELECT * FROM daftar_konser WHERE konser_id=$id");
$row = mysqli_fetch_assoc($konser);

if (isset($_POST['submit'])) {
    $namakonser = $_POST['namakonser'];
    $lineup = $_POST['lineup'];
    $eventorg = $_POST['eventorg'];
    $schedule = $_POST['schedule'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $contact = $_POST['contact'];

    $sql = "UPDATE daftar_konser SET nama_konser='$namakonser', lineup='$lineup', event_org='$eventorg', schedule='$schedule', location='$location', ticket_price='$price', contact_person='$contact' WHERE konser_id=$id";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: index.php');
    } else {
        echo 'Gagal mengupdate data';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Edit Daftar Konser</title>
</head>
<body>
    <h1>Edit Konser</h1>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="namakonser" class="form-label">Nama Konser</label>
                <input type="text" class="form-control" id="namakonser" name="namakonser" required value="<?= $row['nama_konser'] ?>">
            </div>
            <div class="mb-3">
                <label for="lineup" class="form-label">Lineup</label>
                <input type="text" class="form-control" id="lineup" name="lineup" required value="<?= $row['lineup'] ?>">
            </div>
            <div class="mb-3">
                <label for="eventorg" class="form-label">Event Organizer</label>
                <input type="text" class="form-control" id="eventorg" name="eventorg" required value="<?= $row['event_org'] ?>">
            </div>
            <div class="mb-3">
                <label for="schedule" class="form-label">Tanggal Konser</label>
                <input type="date" class="form-control" id="schedule" name="schedule" required value="<?= $row['schedule'] ?>">
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Lokasi Konser</label>
                <input type="text" class="form-control" id="location" name="location" required value="<?= $row['location'] ?>">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga Tiket</label>
                <input type="number" class="form-control" id="price" name="price" required value="<?= $row['ticket_price'] ?>">
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact Person</label>
                <input type="text" class="form-control" id="contact" name="contact"required value="<?= $row['contact_person'] ?>">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" id="submit" name="submit" onclick="alert('Anda akan mengedit data konser ini')">
            </div>
        </form>
    </div>
</body>
</html>