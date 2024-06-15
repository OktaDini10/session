<?php
    include('dbconnect.php');
    $id = $_GET['urut'];
    $data = $k->query("SELECT * FORM users WHERE id ='" .$id."'");
    if($data->num_rows == 1)
    {
        $datauser = $data->fetch_assoc();
        ?>
            <form action="editaction.php" method="Post">
                <input type="text" name="username" requered placeholder="Username" value=" <?php echo $datauser
                ['username']?>">
                <input type="text" name="nama" requered placeholder="Nama Lengkap" value=" <?php echo $datauser
                ['nama']?>">
                <input type="email" name="email" requered placeholder="Email" value=" <?php echo $datauser
                ['email']?>">
                <input type="password" name="paswd" requered placeholder="Kosongi jika tidak ingin ganti password">
                <input type="ubmit" value="Simpan">
            </form>
    }