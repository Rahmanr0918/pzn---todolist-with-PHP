<?php

require_once "../Model/TodoList.php";
require_once "../BusinesLogic/RemoveTodoList.php"; 
require_once "../BusinesLogic/AddTodoList.php"; 
require_once "../BusinesLogic/ShowTodoList.php";

addTodoList("rahman");
addTodoList("nuril");
addTodoList("asep");
addTodoList("mazda");

showTodoList();

removeTodoList(3);
showTodoList();
removeTodoList(1);
showTodoList();