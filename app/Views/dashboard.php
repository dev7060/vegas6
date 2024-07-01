<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome <?php echo $user['name']; ?></h2>
    <img src="<?php echo base_url($user['picture']); ?>" alt="Profile Picture">
    <ul>
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/profile">Profile</a></li>
        <li><a href="/search">Search</a></li>
    </ul>
</body>
</html>
