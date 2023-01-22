<?php

$conn = conn();
$db   = new Database($conn);

$db->update('users',[
    'verification_at' => date('Y-m-d H:i:s')
],[
    'id' => $_GET['id']
]);

set_flash_msg(['success'=>'Pengguna berhasil diverifikasi']);
header('location:'.routeTo('users/user'));