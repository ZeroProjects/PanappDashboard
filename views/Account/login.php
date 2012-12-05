<?php
if (!defined('APP'))
    die("Direct access not allowed!");
?>

<p>Please enter your login information below:</p>

<form class="form-signin" method="post" action="#">
    <h2 class="form-signin-heading">Please sign in</h2>
    <input type="text" name="username" class="input-block-level" placeholder="Email address">
    <?php echo $this->formValidation->errorMessages('username', '<span class="text-error">', '</span>'); ?>
    <input type="password" name="password" class="input-block-level" placeholder="Password">
    <?php echo $this->formValidation->errorMessages('password', '<span class="text-error">', '</span>'); ?>
    <input type="hidden" name="signature" value="<?php echo $signature; ?>">
    <label class="checkbox">
        <input type="checkbox" value="remember-me"> Remember me
    </label>
    <input name="login" type="submit" value="Sign in" class="btn btn-large btn-primary">
</form>