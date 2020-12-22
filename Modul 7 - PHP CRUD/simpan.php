<?php
    include "koneksi.php";
    include "create_message.php";
    
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $photo = $_POST['photofilename'];
    if(isset($_POST['mahasiswa_id'])) {
        $sql = "UPDATE data SET nama='$nama', kelas='$kelas', alamat='$alamat',photo='$photo' WHERE id=".$_POST['mahasiswa_id'];
        $edit = $conn->query($sql);
        
        if($edit) {
            $conn->close();
            create_message('Ubah data berhasil','success','check');
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        } else {
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        }
    } else {

        $sql = "INSERT into data(nama, kelas, alamat,photo) VALUES('$nama','$kelas','$alamat','$photo')";
        $add = $conn->query($sql);
        
        if($add) {
            $conn->close();
            create_message('Simpan data berhasil','success','check');
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        } else {
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        }
    }
	
?>