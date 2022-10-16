<?php
session_start();
if (isset($_POST['confirm'])) {
    include('../db.php');

    $tgl_pinjam = date('Y-m-d');

    $query = mysql_query("UPDATE peminjaman SET tgl_kembali  = '$tgl', kembali = '2'
        where id_pinjam ='$_GET[id]'");
    if ($query) {
        echo '<script>alert("Buku berhasil dikembalikan");
        window.location = "../page/user/listBukuPage.php"</script>\n';
    } else {
        echo '<script>alert("Gagal mengembalikan buku");
        </script>\n';
    }

} else {
    echo
    '<script>
    window.history.back()
    </script>';
}
?>