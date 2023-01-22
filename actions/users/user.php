<?php

$conn = conn();
$db   = new Database($conn);
$success_msg = get_flash_msg('success');
Page::set_title('Data User');

$role = $db->single('roles',['name'=>'User']);
$db->query = "SELECT * FROM users WHERE id IN (SELECT user_id FROM user_roles WHERE role_id = $role->id)";

if(get_role(auth()->user->id)->name == 'Admin')
{
    $ranting_id = auth()->user->ranting_id;
    $db->query = "SELECT * FROM users WHERE ranting_id=$ranting_id AND id IN (SELECT user_id FROM user_roles WHERE role_id = $role->id)";
}

$datas = $db->exec('all');

return compact('datas','success_msg');