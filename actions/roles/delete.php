<?php

$conn = conn();
$db   = new Database($conn);

$db->delete('roles',[
    'id' => $_GET['id']
]);

set_flash_msg(['success'=>'Role berhasil dihapus']);
header('location:'.routeTo('roles/index'));
die();