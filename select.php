<?php
    require('db.php');
    
    $query = "SELECT * FROM quotes";
    $result = $db->query($query);
?>
<!doctype html>
<html lang="en">
<head>
    <title>MySQLi SELECT Test</title>
</head>
<body>
    <h1>MySQLi SELECT Test</h1>
    <?php if (!$result || $result->num_rows == 0): ?>
        <p>There are no quotes in the system.</p>
    <?php else: ?>
        <h2>We have <?= $result->num_rows ?> quotes.</h2>
        <ul>
            <?php while($row = $result->fetch_object()): ?>
                <li>
                    <strong><?= $row->author ?></strong> - <em><?= $row->content ?></em>
                </li>
            <?php endwhile ?>
        </ul>
    <?php endif ?>
</body>
</html>
