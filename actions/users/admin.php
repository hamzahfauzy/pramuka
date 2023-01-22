<?php

$conn = conn();
$db   = new Database($conn);
$success_msg = get_flash_msg('success');
Page::set_title('Data Admin');

$role = $db->single('roles',['name'=>'Admin']);

$db->query = "SELECT * FROM users WHERE id IN (SELECT user_id FROM user_roles WHERE role_id = $role->id)";
$datas = $db->exec('all');

return compact('datas','success_msg');