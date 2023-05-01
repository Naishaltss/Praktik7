<!DOCTYPE html>
<html>
<head>
    <title>CRUD DATA PEGAWAI</title>
    <style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        a {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px 20px;
            text-decoration: none;
            margin: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>DATA PEGAWAI</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No Telephone</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include 'tugas3koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM data_pegawai");
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_telp']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div style="text-align: center;">
        <a href="tugas3tambah.php">Tambah</a>
        <a href="tugas3edit.php">Edit</a>
        <a href="tugas3hapus.php">Hapus</a>
    </div>
</body>
</html>
