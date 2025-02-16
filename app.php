<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BusinesLogic/AddTodoList.php";
require_once __DIR__ . "/BusinesLogic/RemoveTodoList.php";
require_once __DIR__ . "/BusinesLogic/ShowTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/helper/input.php";

echo "Aplikasi Todolist";

viewShowTodoList();