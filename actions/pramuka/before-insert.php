<?php

if(get_role(auth()->user->id)->name == 'User')
{
    $_POST[$table]['user_id'] = auth()->user->id;
}

$_POST[$table]['golongan'] = implode(',',$_POST[$table]['golongan']);