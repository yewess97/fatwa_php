<?php

$id = $_GET['id'];

require_once('initialize.php');
require_once('specializes.php');

$result = delete_specialize($id);

if ($result == "SUCCESS") {
    redirect_to('admin/admin-specialize.php');
} else {
    exit($result);
}

?>