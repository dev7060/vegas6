<?php helper(['form']); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
</head>
<body>
    <h2>Search Images/Videos</h2>
    <?php echo form_open('search/results'); ?>
        <p>Search Query: <input type="text" name="query"></p>
        <p><input type="submit" value="Search"></p>
    <?php echo form_close(); ?>
</body>
</html>
