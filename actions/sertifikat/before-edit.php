<?php

$validate_data   = [];
$validate_params = [];
$berkas = false;
if(isset($_FILES['berkas']) && !empty($_FILES['berkas']['name']))
{
    $berkas = true;
    $validate_data['berkas'] = $_FILES['berkas'];
    $validate_params['berkas'] = ['file','required','mime:pdf'];
}

Validation::run($validate_params,$validate_data);

if($berkas)
{
    $_POST[$table]['berkas'] = do_upload($_FILES['berkas'],'uploads');
}