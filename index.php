<?php
    require('db.php');
?>
<!doctype html>
<html lang="en">
<head>
    <title>MySQLi Test</title>
</head>
<body>
    <h1>MySQLi Test</h1>
    <?php if ($connection_error): ?>
        <p><?= $connection_error_message ?></p>
    <?php else: ?>
        <p>DB Connection was successful!</p>
    <?php endif; ?>
</body>
</html>
