<?php
include_once __DIR__ . '/bootstrap.php';
$errors=[];
if(empty($_POST['name'])){
    $errors[]='Title is empty';
}
if(empty($_POST['Parent_Id'])){
    $errors[]='Parent_Id is empty';
}
if(empty($_POST['Id'])){
    $errors[]='Id is empty';
}
else if(strlen($_POST['name'])<3){
    $errors[]='Name must be bigger than 2';
}
if($errors){
    renderView('category_form.php',['error'=>$error]);
}
saveCategory([
    'name'=>strip_tags($_POST['name']),
    'Parent_Id'=>strip_tags($_POST['Parent_Id']),
    'Id'=>strip_tags($_POST['Id']),
]);
setSuccessMessage('Category successed inserted');
redirect('category_table.php');
?>