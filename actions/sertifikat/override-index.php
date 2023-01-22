<?php

if(get_role(auth()->user->id)->name == 'Admin')
{
    $where = ($where == '' ? 'WHERE ' : ' AND ') . ' ranting_id='.auth()->user->ranting_id;
}

if(get_role(auth()->user->id)->name == 'User')
{
    $where = ($where == '' ? 'WHERE ' : ' AND ') . ' user_id='.auth()->user->id;
}

$db->query = "SELECT * FROM $table $where ORDER BY ".$columns[$order[0]['column']]." ".$order[0]['dir']." LIMIT $start,$length";
$data  = $db->exec('all');

$total = $db->exists($table,$where,[
    $columns[$order[0]['column']] => $order[0]['dir']
]);

return compact('data','total');