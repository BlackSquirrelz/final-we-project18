<?php
/**
 * Created by PhpStorm.
 * User: Fabian
 * Date: 05.06.18
 * Time: 18:08
 */

include 'landingheader.php';

?>

<div id="login-div">
    <form method="post" id="login-form">
        <h1>log in</h1>
        <input class="form-control" type="email" required="" placeholder="E-Mail">
        <input class="form-control" type="password" required="" placeholder="Password">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="formCheck-1">
            <label class="form-check-label" for="formCheck-1">Stay logged in</label>
        </div>
        <p><a class="btn btn-primary" role="button">LOG IN</a></p>
        <a href="#">Forgot password?</a>
    </form>
</div>

<?php include 'landingfooter.php' ; ?>