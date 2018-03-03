<?php
    if (isset($_POST['submit'])) {
        $task = $_POST['task'];
        $deadline = $_POST['deadline'];
        echo htmlspecialchars($task);
        echo htmlspecialchars($deadline);
    }
    
    $tasklist = new mysqli('localhost','root','root','tasklist');
    $notDoneTasks = $tasklist->query('select * from task');
    
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
    <div>
        <li>
            <?php
                while ($row = $notDoneTasks->fetch_assoc()) {
                    echo '<ul>'.$row['name'].'</ul>';
                }
            ?>
        </li>
    </div>
</body>
</html>
<?php
$mysqli->close();
?>