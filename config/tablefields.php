<?php

return [
    'daerah'    => [
        'nama'
    ],
    'cabang'    => [
        'daerah_id' => [
            'label' => 'Daerah',
            'type'  => 'options-obj:daerah,id,nama'
        ],
        'nama', 
    ],
    'ranting' => [
        'daerah_id' => [
            'label' => 'Daerah',
            'type'  => 'options-obj:daerah,id,nama'
        ],
        'cabang_id' => [
            'label' => 'Cabang',
            'type'  => 'options-obj:cabang,id,nama'
        ],
        'nama', 
    ],
    'sekolah' => [
        'daerah_id' => [
            'label' => 'Daerah',
            'type'  => 'options-obj:daerah,id,nama'
        ],
        'cabang_id' => [
            'label' => 'Cabang',
            'type'  => 'options-obj:cabang,id,nama'
        ],
        'ranting_id' => [
            'label' => 'Ranting',
            'type'  => 'options-obj:ranting,id,nama'
        ],
        'nama' => [
            'label' => 'nama',
            'type'  => 'text'
        ], 
        'gugus_depan' => [
            'label' => 'Gugus Depan',
            'type'  => 'text'
        ], 
    ],
    'sertifikat' => [
        'user_id' => [
            'label' => 'User',
            'type'  => 'options-obj:users,id,name'
        ],
        'nama' => [
            'label' => 'nama',
            'type'  => 'text'
        ],
        'tahun' => [
            'label' => 'Tahun',
            'type'  => 'number'
        ],
        'berkas' => [
            'label' => 'Berkas',
            'type'  => 'file'
        ],
    ],
    'pramuka' => [
        'user_id' => [
            'label' => 'User',
            'type'  => 'options-obj:users,id,name'
        ],
        'daerah_id' => [
            'label' => 'Daerah',
            'type'  => 'options-obj:daerah,id,nama'
        ],
        'cabang_id' => [
            'label' => 'Cabang',
            'type'  => 'options-obj:cabang,id,nama'
        ],
        'ranting_id' => [
            'label' => 'Ranting',
            'type'  => 'options-obj:ranting,id,nama'
        ],
        'sekolah_id' => [
            'label' => 'Sekolah',
            'type'  => 'options-obj:sekolah,id,nama'
        ],
        'no_anggota' => [
            'label' => 'No. Anggota',
            'type'  => 'text'
        ],
        'golongan' => [
            'label' => 'Golongan',
            'type'  => 'checkbox:S|G|T|D'
        ],
    ],
    'biodata' => [
        'user_id' => [
            'label' => 'User',
            'type'  => 'options-obj:users,id,name'
        ],
        'nama',
        'jenis_kelamin' => [
            'label' => 'Jenis Kelamin',
            'type'  => 'options:Laki-laki|Perempuan'
        ],
        'agama',
        'kewarganegaraan' => [
            'label' => 'Kewarganegaraan',
            'type'  => 'options:WNI|WNA'
        ],
        'tempat_lahir',
        'tanggal_lahir' => [
            'label' => 'Tanggal Lahir',
            'type'  => 'date'
        ],
        'golongan_darah',
        'NIK',
        'alamat_rumah' => [
            'label' => 'Alamat Rumah',
            'type'  => 'textarea'
        ],
        'provinsi',
        'kabupaten',
        'kode_pos',
        'no_hp',
        'email',
        'asal_sekolah',
        'provinsi_sekolah',
        'kabupaten_sekolah',
        'jurusan',
        'tahun_masuk',
        'alamat_sekolah' => [
            'label' => 'Alamat Sekolah',
            'type'  => 'textarea'
        ],
        'NISN',
        'nama_ayah',
        'tanggal_lahir_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'no_hp_ayah',
        'nama_ibu',
        'tanggal_lahir_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'no_hp_ibu',
    ]
];