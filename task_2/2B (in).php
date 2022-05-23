<?php

$_SESSION["Name"] = $_POST["Name"];
$_SESSION["Surname"] = $_POST["Surname"];
$_SESSION["Age"] = $_POST["Age"];
header("url=2B (out).php");