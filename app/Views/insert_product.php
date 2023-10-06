<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Product</h1>
    <form action="<?php echo base_url('insertproducts'); ?>" method="post">
        <label for="nama" >Nama Product:</label>
        <input type="text" id="nama_product" name="nama_product" required><br>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="description" required></textarea><br>

        <input type="submit" name="submit" value="Tambah Product">
    </form>
</body>
</html>