<?php
    require('db.php');
    
    $processing_post = false;
    
    if ($_POST && isset($_POST['author']) && isset($_POST['content'])
               && strlen($_POST['author']) != 0 && strlen($_POST['content']) != 0) {
        $processing_post = true;
        
        $author  = $_POST['author'];
        $content = $_POST['content'];
        
        $query = "INSERT INTO quotes (author, content) VALUES ('{$author}', '{$content}')";
        
        $result = $db->query($query);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <title>MySQLi INSERT Test</title>
</head>
<body>
    <h1>MySQLi INSERT Test</h1>
    
    <form method="post">
        <p>
            <label for="author">Author</label>
            <input id="author" name="author">
        </p>
        <p>
            <label for="content">Content</label>
            <input id="content" name="content">
        </p>
        <input type="submit">
    </form>
    <?php if ($processing_post): ?>
        <?php if ($result): ?>
            <p>Successfully added the following quote to the database:</p>
        <?php else: ?>
            <p>Could not add the following quote to the database:</p>
        <?php endif ?>
        
        <p><strong><?= $author ?></strong> - <em><?= $content ?></em></p>
    <?php endif ?>
</body>
</html>
