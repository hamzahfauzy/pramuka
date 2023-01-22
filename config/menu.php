<?php

return [
    'dashboard' => 'default/index',
    'biodata' => 'default/profile',
    'master' => [
        'daerah' => 'crud/index?table=daerah',
        'cabang' => 'crud/index?table=cabang',
        'ranting' => 'crud/index?table=ranting',
    ],
    'sekolah' => 'crud/index?table=sekolah',
    'pramuka' => 'crud/index?table=pramuka',
    'sertifikat' => 'crud/index?table=sertifikat',
    'admin' => 'users/admin',
    'user'  =>  'users/user',
    // 'pengguna'  => [
    //     'semua pengguna' => 'users/index',
    //     'roles' => 'roles/index'
    // ],
    // 'pengaturan' => 'application/index'
];