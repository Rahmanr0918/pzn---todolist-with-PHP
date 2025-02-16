<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinesLogic/RemoveTodoList.php";
require_once __DIR__ . "/../helper/input.php";

function viewRemoveTodoList()
{
    echo "Menghapus todo" . PHP_EOL;

    $pilihan = input("Nomor (x untuk hapus) ");

    if ($pilihan == "x") {
        echo "Batal Menghapus todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "sukses mengahapus todo pilihan" . PHP_EOL;
        } else {
            echo "Gagal mengahapus todo" . PHP_EOL;
        }
    }

}