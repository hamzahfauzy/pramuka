<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_pramuka_".strtotime('now').".xls");

$table = 'pramuka';
Page::set_title('Data '._ucwords(__($table)));
$conn = conn();
$db   = new Database($conn);
$success_msg = get_flash_msg('success');
$fields = config('fields')[$table];

$role = $db->single('roles',['name'=>'User']);
$db->query = "SELECT 
                (SELECT name FROM users WHERE users.id=pramuka.user_id) as nama, 
                (SELECT nama FROM daerah WHERE daerah.id=pramuka.daerah_id) as daerah, 
                (SELECT nama FROM cabang WHERE cabang.id=pramuka.cabang_id) as cabang, 
                (SELECT nama FROM ranting WHERE ranting.id=pramuka.ranting_id) as ranting, 
                (SELECT nama FROM sekolah WHERE sekolah.id=pramuka.sekolah_id) as sekolah, 
                no_anggota, golongan
              FROM 
                pramuka 
              WHERE 
                user_id IN (SELECT user_id FROM user_roles WHERE role_id = $role->id)";

if(get_role(auth()->user->id)->name == 'Admin')
{
    $ranting_id = auth()->user->ranting_id;
    $db->query .= " AND ranting_id=$ranting_id";
}

$datas = $db->exec('all');

require 'template/export.php';
die();