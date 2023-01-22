<?php

if(get_role(auth()->user->id)->name == 'User')
{
    unset($fields['user_id']);
}

$fields['tahun']['type'] = 'text';

return $fields;