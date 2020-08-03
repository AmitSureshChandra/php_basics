
<?php

use App\Core\App;

require('app/views/partials/header.php');
?>

<hr>

<h1>Tasks</h1>

<hr>
    <?php
        $tasks = App::get('database')->selectAll('task');
    ?>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li> <?= $task->name ?> </li>
    <?php  endforeach; ?>
</ul>

<form action="/tasks/store" method="post">
    <input type="text" name='name'>
    <input type="submit" value="Add Task">
</form>

<?php
require('app/views/partials/footer.php');
?>

<?php
    if (isset($_POST['name'])){
        App::get('database')->insert('task',[
                'name' => $_POST['name'],
        ]);
    }
?>
