<?php

$conn = conn();
$db   = new Database($conn);

$data = $db->single('users',[
    'id' => auth()->user->id
]);

$success_msg = get_flash_msg('success');

if(request() == 'POST')
{
    if(isset($_POST['biodata']))
    {
        $db->update('biodata',$_POST['biodata'],[
            'user_id' => auth()->user->id
        ]);
        set_flash_msg(['success'=>'Biodata berhasil diupdate']);
    }
    else
    {
        if(empty($_POST['users']['password']))
            $_POST['users']['password'] = $data->password;
        else
            $_POST['users']['password'] = md5($_POST['users']['password']);
        $db->update('users',$_POST['users'],[
            'id' => auth()->user->id
        ]);
        set_flash_msg(['success'=>'Profil berhasil diupdate']);
    }

    header('location:'.routeTo('default/profile'));
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
