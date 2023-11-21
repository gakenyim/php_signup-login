<?php
include_once("header.php");
?>
<section class="login-form">
    <h2>Log in</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/email..."></br>
        <input type="text" name="pwd" placeholder="Password.."></br>
        <button type="submit" name="submit">Log in</button>
        <p class= "signup-link"> 
            Don't have an account?
        <a href="signup.php" class="signup-link link"> Sign up now</a></p>
    </form>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!<p>";
        }
        if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect login information!<p>";
        }
    }
    ?>
</section>
<?php
include_once("footer.php")
?>