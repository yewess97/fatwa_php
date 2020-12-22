<?php

require_once('db_connection.php');

$connection = open_connection();

function add_user($name,$gender,$birthdate,$social,$email,$password,$country,$phone)
{
    global $connection;
    $query = "INSERT INTO users (name,gender,birth_date,social_status,email";
    $query .= ",password,country,phone,type) VALUES('$name',";
    $query .= "'$gender','$birthdate','$social','$email','$password',";
    $query .="'$country','$phone',0)";
    $results = mysqli_query($connection, $query);
    if ($results == false) {

        return "query failed may be your syntax is wrong";
    }
    mysqli_free_result($results);
    return "SUCCESS";

}

?>