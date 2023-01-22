<?php

$conn = conn();
$db   = new Database($conn);

$role = get_role($_GET['id'])->name;
$route = 'users/index';
if(in_array($role,['Admin','User']))
{
    $route = 'users/'.strtolower($role);
}

$db->delete('users',[
    'id' => $_GET['id']
]);

$db->delete('pramuka',[
    'user_id' => $_GET['id']
]);

$db->delete('sertifikat',[
    'user_id' => $_GET['id']
]);

$db->delete('biodata',[
    'user_id' => $_GET['id']
]);

$db->delete('user_roles',[
    'user_id' => $_GET['id']
]);

set_flash_msg(['success'=>'Pengguna berhasil dihapus']);
header('location:'.routeTo($route));
die();