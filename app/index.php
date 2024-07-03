<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
</html>
<body>
    <div>
        <div>
            <h3>Belajar PHP 7</h3>
            <a href="create.php">Tambah data</a>
        </div>
        <div>
            <table border="1">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../database/koneksi.php';
                    $pdo = Database::connect();
                    $sql = 'SELECT * FROM mahasiswa';
                    foreach ($pdo->query($sql) as $row) {
                    ?>

                        <tr>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td>
                                <a href="edit.php">Edit</a>
                                <a href="hapus.php">Hapus</a>
                            </td>
                        </tr>

                    <?php
                    }
                    Database::disconnect();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

