<?php helper(['form']); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h2>Update Profile</h2>
    <?php echo form_open_multipart('profile/update'); ?>
        <p>Name: <input type="text" name="name"?></p>
        <p>Email: <input type="email" name="email"></p>
        <p>Password: <input type="password" name="password"></p>
        <p>Profile Picture: <input type="file" name="picture"></p>
        <p><input type="submit" value="Update"></p>
    <?php echo form_close(); ?>
</body>
</html>
