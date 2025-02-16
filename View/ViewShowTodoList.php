<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinesLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../helper/input.php";

function viewShowTodoList()
{

    while (true) {
        showTodoList();
        echo "Menu" . PHP_EOL;
        echo "1. Tambah menu" . PHP_EOL;
        echo "2. Hapus Menu" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;
        echo "" . PHP_EOL;
        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "pilihan tidak dimengeri" . PHP_EOL;
        }

    }
    echo "sampai jumpa lagi" . PHP_EOL;
}