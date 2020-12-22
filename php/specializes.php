<?php

require_once('db_connection.php');

$connection = open_connection();

function get_all()
{
    global $connection;
    $query = "SELECT * FROM specialize";
    $results = mysqli_query($connection, $query);
    if ($results == false) {
        return "query failed may be your syntax is wrong";
    }

    $specializes = [];
    while ($record = mysqli_fetch_assoc($results)) {
        //echo "<br>";
        //echo "{$record["id"]}, {$record["name_ar"]}, {$record["name_en"]}"."<br>";
        array_push($specializes, $record);
    }
    //print_r($specializes);
    mysqli_free_result($results);

    return $specializes;

}


function insert_specialize($name_ar, $name_en, $description_ar, $description_en, $image, $alt, $book_ar, $book_en, $book_link)
{
    global $connection;
    $query = "INSERT INTO specialize (name_ar,name_en,card_image,alt_image";
    $query .= ",description_ar,description_en,books_name_ar,books_name_en,books_link) VALUES";
    $query .= "('$name_ar','$name_en','$image','$alt','$description_ar',";
    $query .= "'$description_en','$book_ar','$book_en','$book_link')";
    $results = mysqli_query($connection, $query);
    if ($results == false) {
        return "query failed may be your syntax is wrong";
    }

    mysqli_free_result($results);

    return "SUCCESS";

}


function update_specialize($id, $name_ar, $name_en, $description_ar, $description_en, $image, $alt, $book_ar, $book_en, $book_link)
{
    global $connection;
    if (!empty($image)) {
        $query = "UPDATE specialize SET name_ar='$name_ar',name_en='$name_en'";
        $query .= ",card_image='$image',alt_image='$alt',";
        $query .= "description_ar='$description_ar',description_en='$description_en',";
        $query .= "books_name_ar='$book_ar',books_name_en='$book_en',books_link='$book_link' WHERE id = '$id'";
    } else {
        $query = "UPDATE specialize SET name_ar='$name_ar',name_en='$name_en'";
        $query .= ",alt_image='$alt',";
        $query .= "description_ar='$description_ar',description_en='$description_en',";
        $query .= "books_name_ar='$book_ar',books_name_en='$book_en',books_link='$book_link' WHERE id = '$id'";
    }

    $results = mysqli_query($connection, $query);
    if ($results == false) {
        return "query failed may be your syntax is wrong";
    }

    mysqli_free_result($results);

    return "SUCCESS";

}


function delete_specialize($id)
{
    global $connection;
    $query = "DELETE FROM specialize WHERE id = '$id'";
    $results = mysqli_query($connection, $query);
    if ($results == false) {
        return "query failed may be your syntax is wrong";
    }

    mysqli_free_result($results);

    return "SUCCESS";

}

?>