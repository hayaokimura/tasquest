<?php

    $tasklist = new mysqli('localhost','root','root','tasklist');
    
    
    if (isset($_POST['submit'])) {
        $task = $_POST['task'];
        $deadline = $_POST['deadline'];
        echo htmlspecialchars($task);
        echo htmlspecialchars($deadline);
        $sql = "INSERT INTO task(name,deadline,done) values('".$task."',".$deadline.",0)";
        $tasklist->query($sql);
    }
    
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
        <ul>
            <?php
                while ($row = $notDoneTasks->fetch_assoc()) {
                    echo '<li>'.$row['name'].'</li>';
                }
            ?>
        </ul>
    </div>
</body>
</html>
<?php
$mysqli->close();
?>