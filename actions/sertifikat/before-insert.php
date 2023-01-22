<?php

Validation::run([
    'berkas' => [
        'file','required','mime:pdf'
    ]
],[
    'berkas' => $_FILES['berkas']
]);
$_POST[$table]['berkas'] = do_upload($_FILES['berkas'],'uploads');

if(get_role(auth()->user->id)->name == 'User')
{
    $_POST[$table]['user_id'] = auth()->user->id;
}