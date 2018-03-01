<?php
    if (isset($_POST['submit'])) {
        $task = $_POST['task'];
        $deadline = $_POST['deadline'];
        echo htmlspecialchars($task);
        echo htmlspecialchars($deadline);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" charset="utf-8">
</head>
<body>
    <form action="top.php" method="post">
        <span>タスク</span><input type="text" name="task">
        <span>期限</span><input type="text" name="deadline">
        <input type="submit" name="submit">
    </form>
</body>
</html>