<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 05.06.18
 * Time: 18:08
 */
?>

<!DOCTYPE html>
<html>

<?php include 'header.php'; ?>

<body id="base-div">

<?php include 'navbar.php'; ?>

<div id="login-div">
    <form method="post" id="login-form">
        <h1>log in</h1>
        <input class="form-control" type="email" required="" placeholder="E-Mail">
        <input class="form-control" type="password" required="" placeholder="Password">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="formCheck-1">
            <label class="form-check-label" for="formCheck-1">Stay logged in</label>
        </div>
        <p><a class="btn btn-primary" role="button" href="allprojects.php">LOG IN</a></p>
        <a href="#">Forgot password?</a>
    </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>