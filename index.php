<?php
include('autoload.php');


$category = new Category();

$category_stmt = $category->read_type_for_dropdown();
$row_category = $category_stmt->fetchAll(PDO::FETCH_ASSOC);
 
var_dump($row_category);die();