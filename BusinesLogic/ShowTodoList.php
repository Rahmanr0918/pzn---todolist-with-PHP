<?php

// menampilkan todo di list
function showTodoList()
{
    global $todolist;

    echo "todolist" . PHP_EOL;

    foreach ($todolist as $number => $value) {
        echo "$number.$value" . PHP_EOL;
    }
}