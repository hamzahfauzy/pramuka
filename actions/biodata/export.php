<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=biodata_".strtotime('now').".xls");

$table = 'biodata';
Page::set_title('Data '._ucwords(__($table)));
$conn = conn();
$db   = new Database($conn);
$success_msg = get_flash_msg('success');
$fields = config('fields')[$table];
unset($fields['user_id']);

$role = $db->single('roles',['name'=>'User']);
$db->query = "SELECT * FROM biodata WHERE user_id IN (SELECT user_id FROM user_roles WHERE role_id = $role->id)";

if(get_role(auth()->user->id)->name == 'Admin')
{
    $ranting_id = auth()->user->ranting_id;
    $db->query = "SELECT * FROM biodata WHERE user_id IN (SELECT id FROM users WHERE ranting_id = $ranting_id AND id IN (SELECT user_id FROM user_roles WHERE role_id = $role->id))";
}

$datas = $db->exec('all');

require 'template/export.php';
die();