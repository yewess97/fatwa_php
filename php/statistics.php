<?php

require_once('db_connection.php');

$connection = open_connection();

function get_statistics()
{
    global $connection;
    $query = "SELECT count(id) FROM specialize";
    $specializes_number = mysqli_query($connection, $query);
    if ($specializes_number == false) {
        return "query failed may be your syntax is wrong";
    }

    $specializes_number = mysqli_fetch_row($specializes_number)[0];

    global $connection;
    $query = "SELECT count(id) FROM questions";
    $questions_number = mysqli_query($connection, $query);
    if ($questions_number == false) {
        return "query failed may be your syntax is wrong";
    }

    $questions_number = mysqli_fetch_row($questions_number)[0];

    global $connection;
    $query = "SELECT count(id) FROM answers";
    $answers_number = mysqli_query($connection, $query);
    if ($answers_number == false) {
        return "query failed may be your syntax is wrong";
    }

    $answers_number = mysqli_fetch_row($answers_number)[0];

    global $connection;
    $query = "SELECT count(id) FROM users WHERE type = 1";
    $admin_users_number = mysqli_query($connection, $query);
    if ($admin_users_number == false) {
        return "query failed may be your syntax is wrong";
    }

    $admin_users_number = mysqli_fetch_row($admin_users_number)[0];

    global $connection;
    $query = "SELECT count(id) FROM users WHERE type = 0";
    $users_number = mysqli_query($connection, $query);
    if ($users_number == false) {
        return "query failed may be your syntax is wrong";
    }

    $users_number = mysqli_fetch_row($users_number)[0];

    return [$specializes_number, $questions_number, $answers_number, $admin_users_number, $users_number];

}

?>