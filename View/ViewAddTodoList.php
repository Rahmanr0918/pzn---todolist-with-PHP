<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../BusinesLogic/AddTodoList.php";
function viewAddTodoList(){
    echo "menambah todo" . PHP_EOL;

    $todo = input("Todo (x untuk batal) ");

    if($todo == "x") {
        echo "Batal menambah todo". PHP_EOL;
    }else{

        addTodoList($todo);
    }

}