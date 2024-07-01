<?php helper(['form']); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (session()->has('error')): ?>
        <div><?= session('error') ?></div>
    <?php endif; ?>
    <?php echo form_open('login/authenticate'); ?>
        <p>Email: <input type="email" name="email"></p>
        <p>Password: <input type="password" name="password"></p>
        <p><input type="submit" value="Login"></p>
    <?php echo form_close(); ?>
</body>
</html>
