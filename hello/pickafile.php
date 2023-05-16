<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
// set file to read

$file =$_POST['file']; 

//check to see if 'newdata' has been posted
if(isset($_POST['newdata'])) {
    $newdata = $_POST['newdata'];

    if ($newdata != '') {
        // open file
        $fw = fopen($file, 'w') or die('Could not open file!');
        // write to file
        // added stripslashes to $newdata
        $fb = fwrite($fw, stripslashes($newdata)) or die('Could not write to file');
        // close file
        fclose($fw);
    }
}

    // open file to read contents into $data to display in form for editing
  $fh = fopen($file, "r") or die("Could not open file!");
    // read file contents
  $data = fread($fh, filesize($file)) or die("Could not read file!");
    // close file
  fclose($fh);

  include 'header.php';
?> 



    <body>
    <div class="container">
    <a href="control_panel.php">Tool Panel</a>
        <div class="header">
            <h1>Tool Panel</h1>
        </div>

        <h3>Contents of File</h3>
        <?php echo "
        <div class='textarea'>
            <form action='pickafile.php' method= 'post' >
            <textarea name='newdata' cols='50%' rows='10'>$data</textarea>
            <input type='hidden' name='file' value='".$file."'>
            <input type='submit' value='Change'>
            </form>
        </div>";
        ?>
    </div>
    </body>
</html>