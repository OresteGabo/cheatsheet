<?php
require_once('../../../../private/initialise.php');
$page_title="Login form";
?>

<!doctype html>
<html lang="en">
<?php
require_once(SHARED_PATH.'/head.php');

?>
<body>
<header>
    <?php
    require_once(SHARED_PATH.'/navigation.php');
    ?>
</header>

<div id="wrapper">

<div class="container">
    <h1>Sign in</h1>
    <form action="">
        <div class="form-control">
          <input id="email" name="email" type="email" placeholder="Your Email" required>     
        </div>

        <div class="form-control">
          <input type="password" placeholder="Password" name="password" id="password">
        </div>
        <button class="btn">Submit</button>
        <p class="text">Dont u have an account yet? <a href="#">Create Account</a></p>

    </form>
</div>