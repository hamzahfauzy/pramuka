<?php

$conn = conn();
$db   = new Database($conn);

$data = $db->single('users',[
    'id' => auth()->user->id
]);

$success_msg = get_flash_msg('success');

if(request() == 'POST')
{
    $db->update('biodata',$_POST['biodata'],[
        'user_id' => auth()->user->id
    ]);
    set_flash_msg(['success'=>'Biodata berhasil diupdate']);
    header('location:'.routeTo('biodata'));
}

$fields = [];
$table  = 'biodata';
if(get_role(auth()->user->id)->name == 'User')
{
    $fields = config('fields')[$table];
    $data->biodata = $db->single('biodata',['user_id'=>auth()->user->id]);
    unset($fields['user_id']);
}

return compact('data','success_msg','fields','table');
