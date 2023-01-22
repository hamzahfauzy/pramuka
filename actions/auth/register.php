<?php

$success_msg = get_flash_msg('success');
$error_msg = get_flash_msg('error');

if(request() == 'POST')
{
    $conn  = conn();
    $db    = new Database($conn);

    // validasi gugus depan
    Validation::run([
        'gugus_depan' => [
            'required','exists:sekolah,gugus_depan,'.$_POST['gugus_depan']
        ],
        'username' => [
            'required','unique:users'
        ]
    ],[
        'gugus_depan' => $_POST['gugus_depan'],
        'username' => $_POST['username'],
    ]);

    $user = $db->insert('users',[
        'name' => $_POST['nama'],
        'username' => $_POST['username'],
        'password' => md5($_POST['password']),
        'ranting_id' => $_POST['ranting_id']
    ]);
    
    $db->insert('user_roles',[
        'user_id' => $user->id,
        'role_id' => 3,
    ]);

    $sekolah = $db->single('sekolah',['gugus_depan'=>$_POST['gugus_depan']]);

    $db->insert('biodata',[
        'user_id' => $user->id,
        'nama' => $_POST['nama'],
        'no_hp' => $_POST['no_hp'],
        'asal_sekolah' => $sekolah->nama,
    ]);

    set_flash_msg(['success'=>'Registrasi berhasil! Silahkan hubungi admin ranting untuk proses verifikasi']);
    header('location:'.routeTo('auth/login'));
    die();
    
    // if($user)
    // {
    // }

    // set_flash_msg(['error'=>'Login Gagal! Nama Pengguna atau Kata Sandi tidak cocok']);
    // header('location:'.routeTo('auth/login'));
    // die();
}

return [
    'success_msg' => $success_msg,
    'error_msg' => $error_msg,
];