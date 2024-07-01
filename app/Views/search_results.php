<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h2>Search Results</h2>
    <div>
        <?php foreach ($images as $image): ?>
            <img src="<?php echo $image->webformatURL; ?>" alt="<?php echo $image->tags; ?>">
        <?php endforeach; ?>
    </div>
</body>
</html>
