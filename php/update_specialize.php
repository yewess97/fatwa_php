<?php

$id = $_POST['id'];
$name_ar = $_POST['name_ar'];
$name_en = $_POST['name_en'];
$description_ar = $_POST['description_ar'];
$description_en = $_POST['description_en'];
$image = $_FILES['image'];
$alt = $_POST['image_alt'];
$book_ar = $_POST['book_ar'];
$book_en = $_POST['book_en'];
$book_link = $_POST['book_link'];


if (!empty($image["name"])) {
    require_once('initialize.php');
    $image_path = "images/";
    $image_name = strtotime(1) . basename($image["name"]);
    $target_file = "../public/images/" . $image_name;
    if (!move_uploaded_file($image["tmp_name"], $target_file)) {
        return ("Sorry, there was an error uploading your file.");
    }
    $image = $image_path . $image_name;
} else {
    echo "no image";
    $image = "";
}

//echo $name_ar,$name_en,$description_ar,$description_en,$alt,$book_ar,$book_en."<br	>";
//var_dump($image);

require_once('initialize.php');
require_once('specializes.php');
$result = update_specialize($id, $name_ar, $name_en, $description_ar, $description_en, $image, $alt, $book_ar, $book_en, $book_link);
if ($result == "SUCCESS") {
    redirect_to('admin/admin-specialize.php');
} else {
    exit($result);
}

?>