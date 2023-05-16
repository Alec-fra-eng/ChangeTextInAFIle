<?php
$dir='files';
$selectedfile =$_POST['file'];

//var_dump(getDirContents($dir));
foreach(getDirContents($dir) as $value){
    if (strpos($value,$selectedfile) !== false) {
        $table[]=$value;
    }
}
//var_dump($table);

function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);
    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }
    return $results;
}
//include 'header.php';
?>
<body>
    <form action="pickafile.php" method="post">
        <p>Please select the file you would like to modify:</p>
        <?php foreach($table as $value){?>
        <input type="radio" id=<?php echo $value ?> name="file" value=<?php echo $value ?>>
        <label><?php echo $value ?></label><br>
        <?php } ?>
        <input type="submit" value="Submit">
    </form>
</body>
</html>