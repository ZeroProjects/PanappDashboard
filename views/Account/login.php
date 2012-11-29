<?php
if (!defined('APP'))
    die("Direct access not allowed!");
?>

<?php if (isset($errors) || isset($loginerrors)) { ?>
    <p class="message">Some errors were encountered, please check the details you entered.</p>
    <p>
    <ul class="errors">
        <?php foreach ($errors as $message): ?>
            <li><?php echo $message ?></li>
        <?php endforeach ?>
        <?php
        if (isset($loginerrors) && empty($errors)) {
            echo $loginerrors;
        }
        ?>
    </ul>
    </p>
<?php } else { ?>
    <p>Please enter your login information below:</p>
<?php } ?>

<form class="form-signin" method="post" action="#">
    <h2 class="form-signin-heading">Please sign in</h2>
    <input type="text" name="username" class="input-block-level" placeholder="Email address">
    <input type="password" name="password" class="input-block-level" placeholder="Password">
    <input type="hidden" name="signature" value="<?php echo $signature; ?>">
    <label class="checkbox">
        <input type="checkbox" value="remember-me"> Remember me
    </label>
    <input name="login" type="submit" value="Sign in" class="btn btn-large btn-primary">
</form>