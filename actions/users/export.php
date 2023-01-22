<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=pramuka_".strtotime('now').".xls");

$conn = conn();
$db   = new Database($conn);

$role = $db->single('roles',['name'=>'User']);
$db->query = "SELECT * FROM users WHERE id IN (SELECT user_id FROM user_roles WHERE role_id = $role->id)";

if(get_role(auth()->user->id)->name == 'Admin')
{
    $ranting_id = auth()->user->ranting_id;
    $db->query = "SELECT * FROM users WHERE ranting_id=$ranting_id AND id IN (SELECT user_id FROM user_roles WHERE role_id = $role->id)";
}

$datas = $db->exec('all');

require 'template/export.php';
die();