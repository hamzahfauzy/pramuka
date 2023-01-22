<?php
Page::set_title('Tambah Pengguna');
if(request() == 'POST')
{
    $conn = conn();
    $db   = new Database($conn);

    $_POST['users']['password'] = md5($_POST['users']['password']);

    $is_admin = false;
    $is_user = false;
    $route    = 'users/index';
    if(isset($_GET['role']))
    {
        if($_GET['role'] == 'admin')
        {
            $is_admin = true;
            $route    = 'users/admin';
            $_POST['users']['verification_at'] = date('Y-m-d H:i:s');
        }

        if($_GET['role'] == 'user')
        {
            $is_user = true;
            $route   = 'users/user';
        }
    }

    $user = $db->insert('users',$_POST['users']);

    // add role
    if($is_admin)
    {
        $role = $db->single('roles',['name' => 'Admin']);
        $db->insert('user_roles',[
            'user_id' => $user->id,
            'role_id' => $role->id
        ]);
    }

    if($is_user)
    {
        $role = $db->single('roles',['name' => 'User']);
        $db->insert('user_roles',[
            'user_id' => $user->id,
            'role_id' => $role->id
        ]);

        $db->insert('biodata',[
            'user_id' => $user->id,
            'nama'    => $user->name,
        ]);
    }

    set_flash_msg(['success'=>'Pengguna berhasil ditambahkan']);
    header('location:'.routeTo($route));
}