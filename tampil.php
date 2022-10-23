<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .table {
            width: 50%;
        }
    </style>
</head>

<body>
    <center>
        <h3>
            Data Pendaftaran
        </h3>
        <br>
        <table class="table">
            <tr>
                <th>Nama Lengkap</th>
                <td><?php echo $_POST['namaLengkap']?></td>
            </tr>
            <tr>
                <th>Nama Panggilan</th>
                <td><?php echo $_POST['namaPanggilan']?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $_POST['gender']?></td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td><?php echo $_POST['tempatLahir']?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $_POST['tglLahir']?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $_POST['email']?></td>
            </tr>
            <tr>
                <th>Nomor HP</th>
                <td><?php echo $_POST['noHp']?></td>
            </tr>
            <tr>
                <th>Agama</th>
                <td><?php echo $_POST['agama']?></td>
            </tr>
            <tr>
                <th>Kewarganegaraan</th>
                <td><?php echo $_POST['kewarganegaraan']?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td><?php echo $_POST['status']?></td>
            </tr>
            <tr>
                <th>Pengalaman Kerja</th>
                <td><?php echo $_POST['pengalaman']?></td>
            </tr>
        </table>
    </center>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>
