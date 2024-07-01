<?php helper(['form']); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <?php echo form_open_multipart('register/save'); ?>
        <p>Name: <input type="text" name="name"></p>
        <p>Email: <input type="email" name="email"></p>
        <p>Password: <input type="password" name="password"></p>
        <p>Profile Picture: <input type="file" name="picture"></p>
        <p><input type="submit" value="Register"></p>
    <?php echo form_close(); ?>
</body>
</html>
