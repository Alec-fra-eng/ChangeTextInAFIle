<?php
//Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start();
if(!isset($_SESSION['myusername'])){
header("location:index.php");
}
$myusername = $_SESSION['myusername'];

include 'header.php';
?>

    <body>
        <div class = 'container'>
            <div class = 'header-left'>
                <h3>Tool Control Panel</h3>
            </div>
            <div class = 'header-right'>
                <a href = 'logout.php'>Logout</a>
            </div>
            <hr/>
            <form name="userForm" method="post" action="filefinder.php" >

            <div class="form-group">
                <label for="file">file to change</label>
                <input type="text" name="file">
            </div>

            <button type="submit">submit</button>
        </div>
    </body>
</html>