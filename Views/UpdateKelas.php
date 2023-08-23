<?php 
    require('../Controllers/Ckelas.php');
    require('../Libraries/csrf.php');
    session_start();
    $kelas = new Ckelas();


    if(isset($_POST['update'])){
        if (CSRF::check($_POST['csrf_token'], 'form_csrf')){
         echo $oldName = $_POST['old_name'];
         echo $newName = $_POST['name'];
         echo $kelas->UpdateKelas($oldName,$newName);
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
                <td>Nama Kelas</td><td>:</td>
                <td><input type="text" name="old_name"></td>
            </tr>
            <tr>
                <td>Edit Nama Kelas</td><td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <input type="submit" name="update" value="update">
                </td>
            </tr>
        </table>
    </form>

    
       
