
<?php
    require('views/partials/header.php');
?>

<hr>

<h1>Tasks</h1>

<hr>
    <?php
        $tasks = $app['database']->selectAll('task');
    ?>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li> <?= $task->name ?> </li>
    <?php  endforeach; ?>
</ul>

<form action="/add-task" method="post">
    <input type="text" name='name'>
    <input type="submit" value="Add Task">
</form>

<?php
require('views/partials/footer.php');
?>

<?php
    if (isset($_POST['name'])){
        $app['database']->insert('task',[
                'name' => $_POST['name'],
        ]);
    }
    else
        echo "<alert>enter name</alert>"
?>
