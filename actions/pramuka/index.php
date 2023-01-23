<?php

$table = 'pramuka';
Page::set_title('Data '._ucwords(__($table)));
$success_msg = get_flash_msg('success');
$error_msg = get_flash_msg('error');
$old = get_flash_msg('old');
$fields = config('fields')[$table];
unset($fields['user_id']);

$conn = conn();
$db   = new Database($conn);
$pramuka = $db->single('pramuka',['user_id'=>auth()->user->id]);

if(request() == 'POST')
{
    $_POST[$table]['golongan'] = implode(',',$_POST[$table]['golongan']);

    if(empty($pramuka))
    {
        $_POST[$table]['user_id'] = auth()->user->id;
        $db->insert($table,$_POST[$table]);
    }
    else
    {
        $db->update($table,$_POST[$table],['user_id'=>auth()->user->id]);
    }

    set_flash_msg(['success'=>'Data kepramukaan berhasil disimpan']);
    header('location:'.routeTo('pramuka/index'));
}

return compact('table','error_msg','old','fields','success_msg', 'pramuka');
