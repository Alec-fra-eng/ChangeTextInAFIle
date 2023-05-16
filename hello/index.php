<?php 
include 'header.php';
?>
    <body>
        <div class="card px-5 py-5" id="form1">

            <h3>Member Login</h3>

            <form name="userForm" method="post" action="checklogin.php" >

            <div class="form-group">
                <label for="User">Username</label>
                <input type="text" name="User" class="form-control" id="errorUser" placeholder="Username">
            </div>

            <div class="form-group">
                <label for="Pass">Password</label>
                <input type="password" name="Pass" class="form-control" id="errorPassword" placeholder="Password">
            </div>

                <button type="submit" class="btn btn-default">Login</button>
        </div>
    </body>
</html>
