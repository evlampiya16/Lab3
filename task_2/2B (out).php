<?php


if (isset($_SESSION["Name"]) && isset($_SESSION["Surname"]) && isset($_SESSION["Age"])) {
    echo "I am {$_SESSION['Name']} {$_SESSION['Surname']}. I am {$_SESSION['Age']} years old";
}