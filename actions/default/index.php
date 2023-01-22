<?php

$conn = conn();
$db   = new Database($conn);
Page::set_title('Dashboard');

$role = $db->single('roles',['name'=>'User']);
$db->query = "SELECT * FROM users WHERE id IN (SELECT user_id FROM user_roles WHERE role_id = $role->id)";
$users = $db->exec('exists');

$data = [
    'kwartir_cabang' => $db->exists('cabang'),
    'kwartir_ranting' => $db->exists('ranting'),
    'users' => $users,
];

return $data;