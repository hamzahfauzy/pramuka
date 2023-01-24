<?php

$conn = conn();
$db   = new Database($conn);

$data = $db->single('application');
$success_msg = get_flash_msg('success');

if(request() == 'POST')
{
    if(!empty($_FILES['kta_bg']))
    {
        $_POST['app']['kta_bg'] = do_upload($_FILES['kta_bg'],'uploads');
    }

    $db->update('application',$_POST['app'],[
        'id' => $data->id
    ]);

    set_flash_msg(['success'=>'Detail Aplikasi berhasil diupdate']);
    header('location:'.routeTo('application/index'));
    die();
}

return compact('data','success_msg');