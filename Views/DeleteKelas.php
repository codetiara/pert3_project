<?php 
require('../Controllers/Ckelas.php');
require('../Libraries/csrf.php');
session_start();
$kelas = new Ckelas();

if(isset($_POST['delete'])){
    if (CSRF::check($_POST['csrf_token'], 'form_csrf')){
     echo $namaToDelete = $_POST['name_delete'];
     echo $kelas->DeleteKelas($namaToDelete);
    }
    else{
        echo "Invalid or missing CSRF token.";
    }
}
?>

<form action="" method="post">
<input type="hidden" name="csrf_token" value="<?php echo CSRF::generate('form_csrf'); ?>">
    <table>
        <tr>
            <td>Masukkan Nama Kelas</td><td>:</td>
            <td><input type="text" name="name_delete"></td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="delete" value="Delete">
            </td>
        </tr>
    </table>
</form>
