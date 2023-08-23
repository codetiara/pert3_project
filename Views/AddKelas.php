<?php 
    require('../Controllers/Ckelas.php');
    require('../Libraries/csrf.php');
    session_start();
    $kelas = new Ckelas();

    if(isset($_POST['simpan'])){
        if (CSRF::check($_POST['csrf_token'], 'form_csrf'))
        {
        echo $kelas->SimpanKelas($_POST['name']);
        }
        else{
            echo "Invalid or missing CSRF token.";
        }
    }

    
?>
<br>
<br>
<form action="" method="post">
        <input type="hidden" name="csrf_token" value="<?php echo CSRF::generate('form_csrf'); ?>">
        <table>
            <tr>
                <td>Masukan Nama Kelas</td><td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <input type="submit" name="simpan" value="Simpan">
                </td>
            </tr>
        </table>
    </form>



    

        