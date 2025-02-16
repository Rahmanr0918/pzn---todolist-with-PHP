<?php

require_once "../Model/TodoList.php";
require_once "../BusinesLogic/AddTodoList.php";

addTodoList("eko");
addTodoList("rahman");
addTodoList("rahman");

var_dump($todolist);